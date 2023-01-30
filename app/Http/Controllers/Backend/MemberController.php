<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-members', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-member', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-member', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-member', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $members = Member::latest()->get();
            return DataTables::of($members)
//                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('view-members')) {
                        $btn = '<a href="' . route('backend.members.show', $row->id) . '" class="btn btn-success btn-sm" data-toggle="tooltip"  data-id="' . $row->id . '" data-toggle="tooltip" title="view">
      <i class="fas fa-eye"></i>
</a>';
                    }
                    if (Auth::user()->can('edit-member')) {
                        $btn = $btn . ' <a href="' . route('backend.members.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }
                    if (Auth::user()->can('delete-member')) {
                        $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-member" data-remote="' . route('backend.members.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';

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
                ->addColumn('date_of_birth', function ($row) {
                    if (empty($row->date_of_birth)) {
                        return 'N/A';
                    } else {
                        return $row->date_of_birth;
                    }
                })
                ->addColumn('phone', function ($row) {
                    if (empty($row->phone)) {
                        return 'N/A';
                    } else {
                        return $row->phone;
                    }
                })
                ->addColumn('fullname', function ($row) {
                    return $row->getFullNameAttribute();
                })
                ->rawColumns(['image', 'fullname', 'phone', 'date_of_birth', 'action'])
                ->make(true);
        }
        return view('backend.members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $education = Education::latest()->get();
        return view('backend.members.create', compact('education'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Member::$rules, Member::$messages);

        $form_request = $request->except('image', 'education_levels');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            AppHelper::checkDirectory('members');
            $location = public_path('uploads/members/' . $new_image_name);
            Image::make($image->getRealPath())->fit(250)->save($location, 100);
            $form_request['image'] = $new_image_name;
        }

        try {
            DB::beginTransaction();
            // save the member to the database
            $member = auth()->user()->members()->create($form_request);
            // sync member with education level ids
            $member->educationLevel()->sync($request->education_levels);
            DB::commit();

            alert()->success('success', 'created successfully');

            return redirect()->route('backend.members.index');

        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.members.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Member $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        // creating specific coffe charts
        $red_cherries__data = $member->redCherries()->select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        // variable to be used on the x any y axis
        $red_cherries__months = [];
        $red_cherries__monthCount = [];

        foreach ($red_cherries__data as $month => $values) {
            $red_cherries__months[] = $month;
            $red_cherries__monthCount[] = count($values);
        }

        // kiboko coffee
        $kiboko__data = $member->kibokos()->select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        // variable to be used on the x any y axis
        $kiboko__months = [];
        $kiboko__monthCount = [];

        foreach ($kiboko__data as $month => $values) {
            $kiboko__months[] = $month;
            $kiboko__monthCount[] = count($values);
        }

        // kase coffee
        $kase__data = $member->kibokos()->select('id', 'created_at')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        // variable to be used on the x any y axis
        $kase__months = [];
        $kase__monthCount = [];

        foreach ($kase__data as $month => $values) {
            $kase__months[] = $month;
            $kase__monthCount[] = count($values);
        }
        return view('backend.members.show', compact('member', 'red_cherries__months', 'red_cherries__monthCount', 'kiboko__months', 'kiboko__monthCount', 'kase__months', 'kase__monthCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Member $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $education = Education::latest()->get();
        return view('backend.members.edit', compact('member', 'education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Member $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        if (is_null($request->file('image'))) {
            $request->validate(Arr::except(Member::$rules, ['image', 'phone', 'nin', 'farmer_identification_no']), Member::$messages);
            $request->validate([
                'phone' => 'bail|nullable|string|min:10|max:10|regex:/^[0-9]{10,10}$/|unique:members,phone,' . $member->id,
                'nin' => 'bail|nullable|string|min:14|max:14|unique:members,nin,' . $member->id,
                'farmer_identification_no' => 'bail|required|string|max:30|unique:members,farmer_identification_no,' . $member->id,
            ]);
        } else {
            $request->validate(Arr::except(Member::$rules, ['phone', 'nin', 'farmer_identification_no']), Member::$messages);
            $request->validate([
                'phone' => 'bail|nullable|string|min:10|max:10|regex:/^[0-9]{10,10}$/|unique:members,phone,' . $member->id,
                'nin' => 'bail|nullable|string|min:14|max:14|unique:members,nin,' . $member->id,
                'farmer_identification_no' => 'bail|required|string|max:30|unique:members,farmer_identification_no,' . $member->id,
            ]);
        }

        $form_request = $request->except('image', 'education_levels', '_token', '_method');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            AppHelper::checkDirectory('members');
            $location = public_path('uploads/members/' . $new_image_name);
            Image::make($image->getRealPath())->fit(250)->save($location, 100);
            // Deleting the old image from the file system
            Storage::delete('members/' . $member->image);
            $form_request['image'] = $new_image_name;
        }
        try {

            DB::beginTransaction();
            // update member
            $member->update($form_request);
            // sync member with education level ids
            $member->educationLevel()->sync($request->education_levels, true);
            DB::commit();

            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.members.index');

        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.members.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Member $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        try {
            DB::beginTransaction();
            $member->educationLevel()->detach();
            Storage::delete('members/' . $member->image);
            $member->delete();
            DB::commit();
            return back();
        } catch (\Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
