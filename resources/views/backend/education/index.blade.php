@extends('backend.layouts.master')
@section('pageTitle') education @endsection
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
                        Education Level
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Education Level</li>
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
                        @can('create-member-education-level')
                            <div class="card-header card-primary card-outline">
                                <a href="{{route('backend.education.create')}}"
                                   class="btn btn-primary bg-gradient-primary float-right">
                                    Create new education
                                    level
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-education" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Education Level</th>
                                    <th>Created At</th>
                                    @if(auth()->user()->can('edit-member-education-level') || auth()->user()->can('delete-member-education-level'))
                                        <th>Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($education as $educ)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$educ->education_level}}
                                        </td>
                                        <td>
                                            {{date_format($educ->created_at, 'D F Y')}}
                                        </td>
                                        @if(auth()->user()->can('edit-member-education-level') || auth()->user()->can('delete-member-education-level'))
                                            <td>

                                                @can('edit-member-education-level')
                                                    <a href="{{route('backend.education.edit', $educ->id)}}"
                                                       class="btn btn-success btn-sm"
                                                       data-toggle="tooltip" data-placement="bottom" title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endif
                                                @can('delete-member-education-level')
                                                    <button type="button"
                                                            onclick="deleteEduc('{{$educ->id}}','{{$educ->education_level }}');"
                                                            class="btn btn-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                    <form action="{{route('backend.education.destroy', $educ->id)}}"
                                                          id="deleteEducForm-{{$educ->id}}" method="POST">
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
            $("#tbl-education").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        function deleteEduc(id, education_level) {
            // getting the deleteform
            let formId = $('#deleteEducForm-' + id)
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
                        `${education_level} has been deleted successfully.`,
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        `${education_level} has not been deleted :)`,
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
