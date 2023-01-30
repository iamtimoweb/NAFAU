@extends('backend.layouts.master')
@section('pageTitle') roles @endsection
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
                        Roles
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">roles list</li>
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
                        @can('create-role')
                            <div class="card-header">
                                <a href="{{route('backend.roles.create')}}"
                                   class="btn btn-primary btn-sm float-right">
                                    Create new role
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-roles" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Guard Name</th>
                                    <th>Created At</th>
                                    @if(auth()->user()->can('edit-role') || auth()->user()->can('delete-role'))
                                        <th style="width: 20%">Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$role->name}}
                                        </td>
                                        <td>
                                            {{$role->guard_name}}
                                        </td>
                                        <td>
                                            {{date_format($role->created_at, 'D F Y')}}
                                        </td>
                                        @if(auth()->user()->can('edit-role') || auth()->user()->can('delete-role'))
                                            <td>
                                                @if($role->name!=='super-admin')
                                                    @can('edit-role')
                                                        <a href="{{route('backend.roles.edit', $role->id)}}"
                                                           class="btn btn-success btn-sm"
                                                           data-toggle="tooltip" data-placement="bottom"
                                                           title="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('delete-role')
                                                        <button type="button"
                                                                onclick="deleteRole('{{$role->id}}', '{{$role->name}}');"
                                                                class="btn btn-danger btn-sm"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>

                                                        <form action="{{route('backend.roles.destroy', $role->id)}}"
                                                              id="deleteRoleForm-{{$role->id}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    @endcan
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
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
            $("#tbl-roles").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        function deleteRole(id, name) {
            // getting the deleteform
            let formId = $('#deleteRoleForm-' + id)
            Swal.fire({
                'title': 'Are you sure',
                'text': 'You will not be able to recover this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ff0000',
                confirmButtonText: 'Delete',
            }).then(function (result) {
                if (result.value) {
                    formId.submit();
                    Swal.fire(
                        'Deleted!',
                        `Role ${name} has been deleted successfully.`,
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        `Role ${name} has not been deleted :)`,
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
