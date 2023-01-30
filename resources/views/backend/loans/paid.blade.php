@extends('backend.layouts.master')
@section('pageTitle') loans @endsection
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Paid Loans
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Paid Loans
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="tbl-paid-loans" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Farmer</th>
                                    <th>Loan Amount</th>
                                    <th>Amount Paid</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    @if(auth()->user()->can('delete-paid-loan'))
                                        <th style="width: 20%">Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('assets/vendor/backend/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#tbl-paid-loans").DataTable({
                "responsive": true,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: '{!! route('backend.paid-loans') !!}',
                columns: [
                    {data: 'image', name: 'image'},
                    {data: 'farmer', name: 'farmer'},
                    {data: 'loan_amount', name: 'loan_amount'},
                    {data: 'amount_paid', name: 'amount_paid'},
                    {data: 'balance', name: 'balance'},
                    {data: 'status', name: 'status'},
                        @if(auth()->user()->can('delete-paid-loan'))
                    {
                        data: 'action', name: 'action', orderable: false, searchable: false
                    },
                    @endif
                ],
            });
        });

        // Delete the red-cherries coffee
        $('#tbl-paid-loans').on('click', '.btn-delete-paid-loan[data-remote]', function (e) {
            e.preventDefault();

            let url = $(this).data('remote');
            // confirm then
            Swal.fire({
                'title': 'Are you sure',
                'text': 'You will not be able to recover this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ff0000',
                confirmButtonText: 'Delete',
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        data: {method: '_DELETE', submit: true}
                    }).always(function (data) {
                        $('#tbl-paid-loans').DataTable().draw(false);
                        Swal.fire(
                            'Success!',
                            `loan deleted successfully.`,
                            'success'
                        )
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        `loan has not been deleted :)`,
                        'error'
                    )
                }
            })

        })
    </script>
@endsection
