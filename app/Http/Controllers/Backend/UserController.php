<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\libraries\GoogleAnalytics;
use App\Models\Member;
use App\Models\Student;
use App\Models\Testimonial;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;
use Throwable;
use Yajra\DataTables\DataTables;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-users', ['only' => ['index']]);
        $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-user', ['only' => ['delete']]);
    }

    public function dashboard()
    {

        $users = User::all()->count();
        $members = Member::all()->count();
        $testimonials = Testimonial::all()->count();
        $students = Student::all()->count();

        // creating Members charts
        $members_data = Member::select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        // variable to be used on the x any y axis
        $members_months = [];
        $members_monthCount = [];
        foreach ($members_data as $month => $values) {
            $members_months[] = $month;
            $members_monthCount[] = count($values);
        }

        // creating Students Chart

        $students_data = Student::select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        $students_months = [];
        $students_monthCount = [];
        foreach ($students_data as $month => $values) {
            $students_months[] = $month;
            $students_monthCount[] = count($values);
        }

        // Analytics
        /* top countries */
        $results = GoogleAnalytics::topCountries();
        $country = $results->pluck('country');
        $country_sessions = $results->pluck('sessions');

        // Visitors and page views
        $analyticsData = GoogleAnalytics::fetchVisitorsAndPageViews();

        return view('backend.dashboard', compact('users', 'members', 'testimonials', 'students', 'members_months', 'members_monthCount', 'students_months', 'students_monthCount', 'country', 'country_sessions', 'analyticsData'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::latest()->get();
            return DataTables::of($users)
//                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    if (Auth::user()->can('edit-user')) {
                        $btn = '<a href="' . route('backend.users.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }
                    if (!$row->hasRole('super-admin')) {
                        if (Auth::user()->can('delete-user')) {

                            $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-user" data-remote="' . route('backend.users.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';

                        }
                    }

                    return $btn;

                })
                ->addColumn('image', function ($row) {
                    if (empty($row->image)) {
                        return '<img src="' . asset('assets/backend/images/default.jpg') . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    } else {
                        return '<img src="' . $row->imagePath . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    }

                })
                ->addColumn('name', function ($row) {
                    return $row->getFullNameAttribute();
                })
                ->addColumn('is_active', function ($row) {
                    if ($row->is_active) {
                        return '<i class="fas fa-check-circle text-success"></i>';
                    } else {
                        return '<i class="fas fa-times-circle text-danger"></i>';
                    }
                })
                ->rawColumns(['image', 'name', 'is_active', 'action'])
                ->make(true);
        }
        return view('backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'super-admin')
            ->get();
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(User::$rules, User::$messages);

        $form_request = $request->except(['image', 'roles', 'password_confirmation', 'is_active']);
        $form_request['is_active'] = boolval($request->is_active);

        if ($request->hasFile('image')) {

            // getting the image from the request object
            $image = $request->file('image');
            // renaming the image using timestamp
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();

            // check for the presence of the sliders directory and if not present create the directory
            AppHelper::checkDirectory('users');
            // defining where to store the image
            $location = public_path('uploads/users/' . $new_image_name);

            Image::make($image->getRealPath())->fit(250)->save($location, 100);

            $form_request['image'] = $new_image_name;
        }

        try {

            DB::beginTransaction();
            $user = User::create($form_request);
            /* syncying the user roles */
            // assigning roles to the user
            $user->syncRoles($request->roles);
            DB::commit();
            alert()->success('success', 'user created successfully');
            return redirect()->route('backend.users.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.users.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('backend.users.edit', compact(
            'user',
            'roles'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (is_null($request->file('image'))) {
            $request->validate(Arr::except(User::$rules, ['image', 'email', 'phone_no', 'password', 'password_confirmation']), User::$messages);
            $request->validate([
                'email' => 'bail|required|string|email|max:30|unique:users,email,' . $user->id,
                'phone_no' => 'required|min:10|max:10|regex:/^[0-9]{10,10}$/|unique:users,phone_no,' . $user->id,
            ]);
        } else {
            $request->validate(Arr::except(User::$rules, ['email', 'phone_no', 'password', 'password_confirmation']), User::$messages);
            $request->validate([
                'email' => 'bail|required|string|email|max:30|unique:users,email,' . $user->id,
                'phone_no' => 'required|min:10|max:10|regex:/^[0-9]{10,10}$/|unique:users,phone_no,' . $user->id,
            ]);
        }

        $form_request = $request->except(['image', 'roles', 'is_active']);
        $form_request['is_active'] = boolval($request->is_active);

        if ($request->hasFile('image')) {
            // getting the image from the request object
            $image = $request->file('image');
            // renaming the image using timestamp
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();

            // check for the presence of the sliders directory and if not present create the directory
            AppHelper::checkDirectory('users');
            // defining where to store the image
            $location = public_path('uploads/users/' . $new_image_name);

            Image::make($image->getRealPath())->fit(250)->save($location, 100);

            // Deleting the old image from the file system
            Storage::delete('users/' . $user->image);

            $form_request['image'] = $new_image_name;
        }

        try {
            DB::beginTransaction();
            $user->update($form_request);
            $user->syncRoles($request->roles);
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.users.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();
            $user->roles()->detach();
            Storage::delete('users/' . $user->image);
            $user->delete();
            DB::commit();
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }


    public function getProfile($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'bail|required|string|min:3|max:15',
            'lastname' => 'bail|required|string|min:3|max:15',
            'phone_no' => 'required|min:10|max:10|regex:/^[0-9]{10,10}$/|unique:users,phone_no,' . $id,
        ]);

        try {

            DB::beginTransaction();
            $user = User::findOrFail($id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->phone_no = $request->phone_no;
            $user->save();
            DB::commit();

            alert()->success('success', 'Profile Updated Successfully');
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }

    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword()],
            'new_password' => ['required'],
            'confirm_new_password' => ['same:new_password']
        ]);

        try {
            DB::beginTransaction();
            $user = User::findOrFail(auth()->id());
            $user->password = $request->new_password;
            $user->save();

            DB::commit();

            alert()->success('success', 'Password Changed Successfully');
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
