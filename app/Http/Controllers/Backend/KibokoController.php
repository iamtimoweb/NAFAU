<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kiboko;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class KibokoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-coffee', ['only' => ['index']]);
        $this->middleware('permission:create-coffee', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-coffee', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-coffee', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kibokos = Kiboko::latest()->get();
            return DataTables::of($kibokos)
                ->addColumn('action', function ($row) {

                    $btn = '';

                    if (Auth::user()->can('edit-coffee')) {
                        $btn = $btn . '<a href="' . route('backend.kiboko.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }

                    if (Auth::user()->can('delete-coffee')) {
                        $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-kiboko-coffee" data-remote="' . route('backend.kiboko.destroy', $row->id) . '">
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
                ->addColumn('date', function ($row) {
                    return date_format($row->created_at, 'l, j F Y');
                })
                ->addColumn('farmer', function ($row) {
                    return $row->member->getFullNameAttribute();
                })
                ->addColumn('price', function ($row) {
                    return number_format($row->price);
                })
                ->addColumn('amount', function ($row) {
                    return number_format($row->getAmountAttribute());
                })
                ->rawColumns(['date', 'image', 'farmer', 'price', 'amount', 'action'])
                ->make(true);
        }
        return view('backend.coffee.kiboko.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::latest()->get();
        return view('backend.coffee.kiboko.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Kiboko::$rules);
        $form_request = $request->all();
        try {
            DB::beginTransaction();
            auth()->user()->kiboko()->create($form_request);
            DB::commit();
            alert()->success('success', 'added successfully');
            return redirect()->route('backend.kiboko.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.kiboko.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Kiboko $kiboko
     * @return \Illuminate\Http\Response
     */
    public function show(Kiboko $kiboko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Kiboko $kiboko
     * @return \Illuminate\Http\Response
     */
    public function edit(Kiboko $kiboko)
    {
        $members = Member::latest()->get();
        return view('backend.coffee.kiboko.edit', compact('members', 'kiboko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Kiboko $kiboko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kiboko $kiboko)
    {
        $request->validate(Kiboko::$rules);
        $form_request = $request->all();

        try {
            DB::beginTransaction();
            $kiboko->update($form_request);
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.kiboko.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.kiboko.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Kiboko $kiboko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kiboko $kiboko)
    {
        try {
            DB::beginTransaction();
            $kiboko->delete();
            DB::commit();
            return back();
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
