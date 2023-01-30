@extends('backend.layouts.master')
@section('pageTitle') members @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/flatpickr/dist/flatpickr.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('pageContent')
    <section class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Members</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Members</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        @can('create-member')
                            <div class="card-header">
                                <a href="{{route('backend.members.create')}}"
                                   class="btn btn-primary btn-sm float-right">Create New Member
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-members" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Farmer ID</th>
                                    <th>Image</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Contact</th>
                                    @if(auth()->user()->can('view-members') || auth()->user()->can('edit-member') || auth()->user()->can('delete-member'))
                                        <th>Action</th>
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

    <!-- Extentions -->
    <script src="{{asset('assets/vendor/backend/datatable-extentions/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/jszip.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/datatable-extentions/buttons.print.min.js')}}"></script>




    <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let table = $('#tbl-members').DataTable({
                "responsive": true,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: '{!! route('backend.members.index') !!}',
                columns: [
                    {data: 'farmer_identification_no', name: 'farmer_identification_no'},
                    {data: 'image', name: 'image'},
                    {data: 'fullname', name: 'fullname'},
                    {data: 'gender', name: 'gender'},
                    {data: 'date_of_birth', name: 'date_of_birth'},
                    {data: 'phone', name: 'phone'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                dom: 'Bfltip',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ],

            });

            // Delete the member
            $('#tbl-members').on('click', '.btn-delete-member[data-remote]', function (e) {
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
                            $('#tbl-members').DataTable().draw(false);
                            Swal.fire(
                                'Success!',
                                `deleted successfully.`,
                                'success'
                            )
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Cancelled',
                            `Member has not been deleted :)`,
                            'error'
                        )
                    }
                })

            })
        });
    </script>
@endsection
