<?php

namespace App\Http\Controllers\Backend;

use App\Events\checkLoanStatus;
use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-payments', ['only' => ['index']]);
        $this->middleware('permission:create-payment', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-payment', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-payment', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $payments = Payment::latest()->get();
            return DataTables::of($payments)
                ->addColumn('action', function ($row) {
                    $btn = '';

                    if ($row->loan->is_active) {
                        if (Auth::user()->can('edit-payment')) {
                            $btn = $btn . '<a href="' . route('backend.payments.edit', $row->id) . '" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fas fa-edit"></i
></a>';
                        }
                        if (Auth::user()->can('delete-payment')) {
                            $btn = $btn . ' <button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-payment" data-remote="' . route('backend.payments.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';

                        }
                    } else {
                        if (Auth::user()->can('delete-payment')) {
                            $btn = $btn . '<button data-toggle="tooltip" data-placement="bottom" title="delete" class="btn btn-danger btn-sm btn-delete-payment" data-remote="' . route('backend.payments.destroy', $row->id) . '">
                          <i class="fas fa-trash"></i>
                        </button>';
                        }
                    }

                    return $btn;
                })
                ->addColumn('image', function ($row) {
                    if (empty($row->loan->member->image)) {
                        return '<img src="' . asset('assets/backend/images/default.jpg') . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    } else {
                        return '<img src="' . $row->loan->member->imagePath . '" style="width: 40px; border-radius: 50%;" align="center" alt="" />';
                    }

                })
                ->addColumn('farmer', function ($row) {

                    return $row->loan->member->getFullNameAttribute();
                })
                ->addColumn('date_issued', function ($row) {
                    return date_format($row->created_at, 'l, j F Y, h:i');
                })
                ->rawColumns(['image', 'farmer', 'date_issued', 'action'])
                ->make(true);
        }
        return view('backend.payments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loans = Loan::where('is_active', true)->orderByDesc('created_at')->get();
        return view('backend.payments.create', compact('loans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Payment::$rules);
        $form_request = $request->all();
        try {
            DB::beginTransaction();
            $payment = auth()->user()->payments()->create($form_request);
            DB::commit();
            checkLoanStatus::dispatch($payment);
            alert()->success('success', 'payment added successfully');
            return redirect()->route('backend.payments.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.payments.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $loans = Loan::where('is_active', true)->orderByDesc('created_at')->get();
        return view('backend.payments.edit', compact('loans', 'payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate(Payment::$rules);
        $form_request = $request->all();

        try {
            DB::beginTransaction();
            $payment->update($form_request);
            DB::commit();
            checkLoanStatus::dispatch($payment);
            alert()->success('success', 'payment updated successfully');
            return redirect()->route('backend.payments.index');
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return redirect()->route('backend.payments.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        try {
            DB::beginTransaction();
            $payment->delete();
            DB::commit();
            return back();
        } catch (Throwable $exception) {
            DB::rollBack();
            alert()->error('error', $exception->getMessage());
            return back();
        }
    }
}
