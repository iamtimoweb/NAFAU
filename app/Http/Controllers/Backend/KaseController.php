<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kase;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class KaseController extends Controller
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
            $kases = Kase::latest()->get();
            return DataTables::of($kases)
                ->addColumn('action', function ($row) {

                    $btn = '';

                    if (Auth::user()->can('edit-coffee')) {
                        $btn = $btn . '<a href="' . route('backend.kase.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }
                    if (Auth::user()->can('delete-coffee')) {
                        $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-kase-coffee" data-remote="' . route('backend.kase.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';

                    }

                    return $btn;
                })
                ->addColumn('date', function ($row) {
                    return date_format($row->created_at, 'l, j F Y');
                })
                ->addColumn('image', function ($row) {
                    if (empty($row->image)) {
                        return '<img src="' . asset('assets/backend/images/default.jpg') . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    } else {
                        return '<img src="' . $row->imagePath . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    }

                })
                ->addColumn('farmer', function ($row) {
                    return $row->member->getFullNameAttribute();
                })
                ->addColumn('price', function ($row) {
                    return number_format($row->price);
                })
                ->addColumn('milling_charges', function ($row) {
                    return number_format($row->milling_charges);
                })
                ->addColumn('amount', function ($row) {
                    return number_format($row->getAmountAttribute());
                })
                ->rawColumns(['date', 'image', 'farmer', 'price', 'amount', 'action'])
                ->make(true);
        }
        return view('backend.coffee.kase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::latest()->get();
        return view('backend.coffee.kase.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Kase::$rules);
        $form_request = $request->all();
        try {
            DB::beginTransaction();
            auth()->user()->kase()->create($form_request);
            DB::commit();
            alert()->success('success', 'added successfully');
            return redirect()->route('backend.kase.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.kase.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Kase $kase
     * @return \Illuminate\Http\Response
     */
    public function show(Kase $kase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Kase $kase
     * @return \Illuminate\Http\Response
     */
    public function edit(Kase $kase)
    {
        $members = Member::latest()->get();
        return view('backend.coffee.kase.edit', compact('members', 'kase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Kase $kase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kase $kase)
    {
        $request->validate(Kase::$rules);
        $form_request = $request->all();

        try {
            DB::beginTransaction();
            $kase->update($form_request);
            DB::commit();
            alert()->success('success', 'updated successfully');
            return redirect()->route('backend.kase.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.kase.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Kase $kase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kase $kase)
    {
        try {
            DB::beginTransaction();
            $kase->delete();
            DB::commit();
            return back();
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
