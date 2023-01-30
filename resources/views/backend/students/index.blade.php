@extends('backend.layouts.master')
@section('pageTitle') students @endsection
@section('styles')
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
                    <h1>Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Students</li>
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
                        @can('create-student')
                            <div class="card-header">
                                <a href="{{route('backend.students.create')}}"
                                   class="btn btn-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>
                                    Create a New student
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-students" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Full Name</th>
                                    <th>Date of Birth</th>
                                    <th>Date of Entry</th>
                                    <th>Class of Entry</th>
                                    @if(auth()->user()->can('edit-student') || auth()->user()->can('delete-student'))
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
            $("#tbl-students").DataTable({
                "responsive": true,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: '{!! route('backend.students.index') !!}',
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'image', name: 'image'},
                    {data: 'fullname', name: 'fullname'},
                    {data: 'date_of_birth', name: 'date_of_birth'},
                    {data: 'date_of_entry', name: 'date_of_entry'},
                    {data: 'class_of_entry', name: 'entry_id'},
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

            // Delete the student
            $('#tbl-students').on('click', '.btn-delete-student[data-remote]', function (e) {
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
