<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(
            'permission:view-member-education-level', ['only' => ['index']]
        );
        $this->middleware(
            'permission:create-member-education-level', ['only' => ['create', 'store']]
        );
        $this->middleware(
            'permission:edit-member-education-level', ['only' => ['edit', 'update']]
        );
        $this->middleware(
            'permission:delete-member-education-level', ['only' => ['destroy']]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::latest()->get();
        return view('backend.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Education::$rules);
        try {

            DB::beginTransaction();
            auth()->user()->education()->create($request->all());
            DB::commit();
            alert()->success('success', 'created successfully');
            return redirect()->route('backend.education.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.education.index');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('backend.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'education_level' => 'bail|required|string|min:3|max:30|unique:education,education_level,' . $education->id]);

        try {
            DB::beginTransaction();
            $education->update($request->all());
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.education.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.education.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        try {
            DB::beginTransaction();
            $education->delete();
            DB::commit();
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
