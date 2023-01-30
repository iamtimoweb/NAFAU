<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Entry;
use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Throwable;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-students', ['only' => ['index']]);
        $this->middleware('permission:create-student', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-student', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-student', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $students = Student::latest()->get();
            return DataTables::of($students)
                ->addColumn('action', function ($row) {
                    if (Auth::user()->can('view-students')) {
                        $btn = '<a href="' . route('backend.students.show', $row->id) . '" class="btn btn-success btn-sm" data-toggle="tooltip"  data-id="' . $row->id . '" data-toggle="tooltip" title="view">
      <i class="fas fa-eye"></i>
</a>';
                    }
                    if (Auth::user()->can('edit-student')) {
                        $btn = $btn . ' <a href="' . route('backend.students.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }
                    if (Auth::user()->can('delete-student')) {
                        $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-student" data-remote="' . route('backend.students.destroy', $row->id) . '">
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
                ->addColumn('date_of_entry', function ($row) {
                    if (empty($row->date_of_entry)) {
                        return 'N/A';
                    } else {
                        return $row->date_of_entry;
                    }
                })
                ->addColumn('fullname', function ($row) {
                    return $row->getFullNameAttribute();
                })
                ->addColumn('class_of_entry', function ($row) {
                    return $row->entry->class_name;
                })
                ->rawColumns(['image', 'fullname', 'date_of_birth', 'date_of_entry', 'action'])
                ->make(true);
        }
        return view('backend.students.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Member::latest()->get();
        $entries = Entry::latest()->get();
        return view('backend.students.create', compact('parents', 'entries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Student::$rules, Student::$messages);

        $form_request = $request->except('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            AppHelper::checkDirectory('students');
            $location = public_path('uploads/students/' . $new_image_name);
            Image::make($image->getRealPath())->fit(250)->save($location, 100);
            $form_request['image'] = $new_image_name;
        }

        try {

            DB::beginTransaction();
            auth()->user()->students()->create($form_request);
            DB::commit();
            alert()->success('success', 'created successfully');
            return redirect()->route('backend.students.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.students.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('backend.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $parents = Member::latest()->get();
        $entries = Entry::latest()->get();
        return view('backend.students.edit', compact('student', 'parents', 'entries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if (is_null($request->file('image'))) {
            $request->validate(Arr::except(Student::$rules, ['image', 'student_id_no']), Student::$messages);
            $request->validate([
                'student_id_no' => 'bail|nullable|string|max:10|unique:students,student_id_no,' . $student->id,
            ]);
        } else {
            $request->validate(Arr::except(Student::$rules, ['student_id_no']), Student::$messages);
            $request->validate([
                'student_id_no' => 'bail|nullable|string|max:10|unique:students,student_id_no,' . $student->id,
            ]);
        }

//        $form_request = $request->except('image', 'education_levels', '_token', '_method');
        $form_request = $request->except('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            AppHelper::checkDirectory('students');
            $location = public_path('uploads/students/' . $new_image_name);
            Image::make($image->getRealPath())->fit(250)->save($location, 100);
            // Deleting the old image from the file system
            Storage::delete('students/' . $student->image);
            $form_request['image'] = $new_image_name;
        }

        try {
            DB::beginTransaction();
            $student->update($form_request);
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.students.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.students.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        try {
            DB::beginTransaction();
            Storage::delete('students/' . $student->image);
            $student->delete();
            DB::commit();
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
