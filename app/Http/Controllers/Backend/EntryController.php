<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-classes', ['only' => ['index']]);
        $this->middleware('permission:create-class', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-class', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-class', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::latest()->get();
        return view('backend.entries.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.entries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Entry::$rules);

        try {

            DB::beginTransaction();
            auth()->user()->entry()->create($request->all());
            DB::commit();
            alert()->success('success', 'created successfully');
            return redirect()->route('backend.entries.index');

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.education.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        return view('backend.entries.edit', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        $request->validate([
            'class_name' => 'bail|required|string|min:2|max:30|unique:entries,class_name,' . $entry->id
        ]);
        try {
            DB::beginTransaction();
            $entry->update($request->all());
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.entries.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.entries.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        try {
            DB::beginTransaction();
            $entry->delete();
            DB::commit();
            return back();

        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
