@extends('backend.layouts.master')
@section('pageTitle') Testimonials @endsection
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
                    <h1>Testimonials</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Testimonials</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        @can('create-testimonial')
                            <div class="card-header">
                                <a href="{{route('backend.testimonials.create')}}"
                                   class="btn btn-primary btn-sm float-right">
                                    Create Testimonial
                                </a>
                            </div>
                        @endcan
                        <div class="card-body">
                            <table id="tbl-testimonials" class="table table-striped table-bordered"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Member</th>
                                    <th style="width: 40%">Testimonial</th>
                                    <th>Created</th>
                                    @if(auth()->user()->can('edit-testimonial') || auth()->user()->can('delete-testimonial'))
                                        <th>Action</th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($testimonials as $testimonial)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            <img class="img-fluid"
                                                 style="max-height: 70px; height: 64px; border-radius: 50%;"
                                                 src="{{$testimonial->imagePath}}" alt="">
                                        </td>
                                        <td>
                                            {{$testimonial->member}}
                                        </td>
                                        <td>
                                            {!! Str::of($testimonial->testimony)->limit(100) !!}
                                        </td>

                                        <td>
                                            {{date_format($testimonial->created_at, 'D F Y')}}
                                        </td>
                                        @if(auth()->user()->can('edit-testimonial') || auth()->user()->can('delete-testimonial'))
                                            <td>
                                                @can('edit-testimonial')
                                                    <a href="{{route('backend.testimonials.edit', $testimonial->id)}}"
                                                       class="btn btn-success btn-sm"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-testimonial')
                                                    <button type="button"
                                                            onclick="deleteTestimonial('{{$testimonial->id}}');"
                                                            class="btn btn-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <form
                                                        action="{{route('backend.testimonials.destroy', $testimonial->id)}}"
                                                        id="deleteFormTestimonial-{{$testimonial->id}}" method="POST">
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
            $("#tbl-testimonials").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        function deleteTestimonial(id) {
            // getting the deleteFormtestimonial
            let formId = $('#deleteFormTestimonial-' + id)
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
                        'testimonial deleted successfully.',
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'testimonial has not been deleted :)',
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
