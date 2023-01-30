@extends('backend.layouts.master')
@section('pageTitle') sliders @endsection
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
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Sliders</li>
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

                        @can('create-slider')
                            <div class="card-header">
                                <a href="{{route('backend.sliders.create')}}"
                                   class="btn btn-primary btn-sm float-right">
                                    <i class="fa fa-plus"></i>
                                    Create Slider
                                </a>
                            </div>
                        @endcan

                        <div class="card-body">
                            <table id="tbl-sliders" class="table table-bordered table-striped"
                                   width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="20%">Image</th>
                                    <th width="20%">Title</th>
                                    <th width="30%">Slider Text</th>
                                    <th width="10%">Is Active</th>
                                    @if(auth()->user()->can('edit-slider') ||auth()->user()->can('delete-slider'))
                                        <th width="20%">Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>
                                            <img class="img-fluid" style="max-height: 200px;"
                                                 src="{{$slider->imagePath}}" alt="">
                                        </td>
                                        <td>
                                            {{$slider->title}}
                                        </td>
                                        <td>
                                            {!! Str::of($slider->txt)->limit(50) !!}
                                        </td>
                                        <td>
                                            @if($slider->is_active)
                                                <i class="fas fa-check-circle text-success"></i>
                                            @else
                                                <i class="fas fa-times-circle text-danger"></i>
                                            @endif
                                        </td>
                                        @if(auth()->user()->can('edit-slider') ||auth()->user()->can('delete-slider'))
                                            <td>
                                                @can('edit-slider')
                                                    <a href="{{route('backend.sliders.edit', $slider->id)}}"
                                                       class="btn btn-success btn-sm"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-slider')
                                                    <button type="button"
                                                            onclick="deleteSlider('{{$slider->id}}');"
                                                            class="btn btn-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <form action="{{route('backend.sliders.destroy', $slider->id)}}"
                                                          id="deleteFormSlider-{{$slider->id}}" method="POST">
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
            $("#tbl-sliders").DataTable({
                "responsive": true,
                "autoWidth": false,
            })
        });

        function deleteSlider(id) {
            // getting the deleteFormSlider
            let formId = $('#deleteFormSlider-' + id)
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
                        'slider deleted successfully.',
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'slider has not been deleted :)',
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
