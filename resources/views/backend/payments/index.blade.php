@extends('backend.layouts.master')
@section('pageTitle') payments @endsection
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
                        Payments
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Payments</li>
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
                        @can('create-payments')
                            <div class="card-header">
                                <a href="{{route('backend.payments.create')}}"
                                   class="btn btn-primary btn-sm float-right">
                                    Create Payment
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-payments" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Farmer</th>
                                    <th>Amount Paid</th>
                                    @if(auth()->user()->can('edit-payment') || auth()->user()->can('delete-payment'))
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

            $("#tbl-payments").DataTable({
                "responsive": true,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: '{!! route('backend.payments.index') !!}',
                columns: [
                    {data: 'date_issued', name: 'date_issued'},
                    {data: 'image', name: 'image'},
                    {data: 'farmer', name: 'farmer'},
                    {data: 'amount', name: 'amount'},
                        @if(auth()->user()->can('edit-payment') || auth()->user()->can('delete-payment'))
                    {
                        data: 'action', name: 'action', orderable: false, searchable: false
                    },
                    @endif
                ],
            });
        });
        // Delete the red-cherries coffee
        $('#tbl-payments').on('click', '.btn-delete-payment[data-remote]', function (e) {
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
                        $('#tbl-payments').DataTable().draw(false);
                        Swal.fire(
                            'Success!',
                            `payment deleted successfully.`,
                            'success'
                        )
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        `payment has not been deleted :)`,
                        'error'
                    )
                }
            })

        })
    </script>
@endsection
