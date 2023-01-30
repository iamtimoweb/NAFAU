@extends('backend.layouts.master')
@section('pageTitle') classes @endsection
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
                        Classes
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Classes</li>
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
                        @can('create-class')
                            <div class="card-header card-primary card-outline">
                                <a href="{{route('backend.entries.create')}}"
                                   class="btn btn-primary btn-sm float-right">Create new class</a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-entries" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>classes</th>
                                    <th>Created At</th>
                                    @if(auth()->user()->can('edit-class') || auth()->user()->can('delete-class'))
                                        <th>Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entries as $entry)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$entry->class_name}}
                                        </td>
                                        <td>
                                            {{date_format($entry->created_at, 'D F Y')}}
                                        </td>
                                        @if(auth()->user()->can('edit-class') || auth()->user()->can('delete-class'))
                                            <td>

                                                @can('edit-class')
                                                    <a href="{{route('backend.entries.edit', $entry->id)}}"
                                                       class="btn btn-success btn-sm"
                                                       data-toggle="tooltip" data-placement="bottom" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-class')
                                                    <button type="button"
                                                            onclick="deleteEntry('{{$entry->id}}','{{$entry->class_name}}')"
                                                            class="btn btn-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                    <form action="{{route('backend.entries.destroy', $entry->id)}}"
                                                          id="deleteEntryForm-{{$entry->id}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                @endcan
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
            $("#tbl-entries").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        function deleteEntry(id, entry_level) {
            // getting the deleteform
            let formId = $('#deleteEntryForm-' + id)
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
                        `${entry_level} has been deleted successfully`,
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        `${entry_level} has not been deleted :)`,
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
