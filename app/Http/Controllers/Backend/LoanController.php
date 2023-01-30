<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class LoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-loans', ['only' => ['index']]);
        $this->middleware('permission:create-loan', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-loan', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-loan', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $loans = Loan::where('is_active', true)->orderByDesc('created_at')->get();
            return DataTables::of($loans)
                ->addColumn('action', function ($row) {

                    $btn = '';

                    if (Auth::user()->can('edit-loan')) {
                        $btn = $btn . '<a href="' . route('backend.loans.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                    }
                    if (Auth::user()->can('delete-loan')) {
                        $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-loan" data-remote="' . route('backend.loans.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';

                    }
                    return $btn;
                })
                ->addColumn('image', function ($row) {
                    if (empty($row->member->image)) {
                        return '<img src="' . asset('assets/backend/images/default.jpg') . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    } else {
                        return '<img src="' . $row->member->imagePath . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    }

                })
                ->addColumn('farmer', function ($row) {

                    return $row->member->getFullNameAttribute();
                })
                ->addColumn('date_issued', function ($row) {
                    return date_format($row->created_at, 'l, j F Y');
                })
                ->addColumn('loan_amount', function ($row) {
                    return number_format($row->amount);
                })
                ->addColumn('amount_paid', function ($row) {
                    return number_format($row->getAmountPaidAttribute());
                })
                ->addColumn('balance', function ($row) {
                    return number_format($row->getBalanceAttribute());
                })
                ->addColumn('status', function ($row) {

                    if ($row->status) {
                        return '<i class="fas fa-check-circle text-success"></i> Complete';
                    } else {
                        return '<i class="fas fa-times-circle text-danger"></i> Pending';
                    }

                })
                ->rawColumns(['image', 'farmer', 'date_issued', 'loan_amount', 'amount_paid', 'balance', 'status', 'action'])
                ->make(true);
        }
        return view('backend.loans.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::latest()->get();
        return view('backend.loans.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(Loan::$rules);
        $form_request = $request->all();
        try {
            DB::beginTransaction();
            auth()->user()->loans()->create($form_request);
            DB::commit();
            alert()->success('success', 'loan added successfully');
            return redirect()->route('backend.loans.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.loans.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        $members = Member::latest()->get();
        return view('backend.loans.edit', compact('members', 'loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $request->validate(Loan::$rules);
        $form_request = $request->all();

        try {
            DB::beginTransaction();
            $loan->update($form_request);
            DB::commit();
            alert()->success('success', 'loan updated successfully');
            return redirect()->route('backend.loans.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.loans.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        try {
            DB::beginTransaction();
            $loan->delete();
            DB::commit();
            return back();
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }

    public function getPaidLoans(Request $request)
    {
        if ($request->ajax()) {
            $loans = Loan::where('is_active', false)->orderByDesc('created_at')->get();
            return DataTables::of($loans)
//                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '';

                    if (Auth::user()->can('delete-paid-loan')) {
                        $btn = $btn . '<button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-paid-loan" data-remote="' . route('backend.loans.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';
                    }

                    return $btn;
                })
                ->addColumn('image', function ($row) {
                    if (empty($row->member->image)) {
                        return '<img src="' . asset('assets/backend/images/default.jpg') . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    } else {
                        return '<img src="' . $row->member->imagePath . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    }

                })
                ->addColumn('farmer', function ($row) {

                    return $row->member->getFullNameAttribute();
                })
                ->addColumn('loan_amount', function ($row) {
                    return number_format($row->amount);
                })
                ->addColumn('amount_paid', function ($row) {
                    return number_format($row->getAmountPaidAttribute());
                })
                ->addColumn('balance', function ($row) {
                    return number_format($row->getBalanceAttribute());
                })
                ->addColumn('status', function ($row) {

                    if ($row->is_active) {
                        return '<i class="fas fa-times-circle text-danger"></i> Pending';
                    } else {
                        return '<i class="fas fa-check-circle text-success"></i> Complete';
                    }

                })
                ->rawColumns(['image', 'farmer', 'loan_amount', 'amount_paid', 'balance', 'status', 'action'])
                ->make(true);
        }
        return view('backend.loans.paid');
    }
}
