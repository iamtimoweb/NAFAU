@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create testimonial @endsection

@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Testimonial
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.testimonials.index')}}">Testimonials</a>
                        </li>
                        <li class="breadcrumb-item active">add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline shadow">

                        <form id="createTestimonialForm" action="{{route('backend.testimonials.store')}}" method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Create Testimonial
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="member">Member</label>
                                        <input type="text" name="member"
                                               class="form-control @error('member') is-invalid @enderror"
                                               id="member" value="{{ old('member') }}" placeholder="Member Name..."
                                               minlength="3" maxlength="255">
                                        @error('member')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="file">Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" accept=".jpeg, .jpg, .png"
                                                   class="custom-file-input @error('image') is-invalid @enderror"
                                                   id="image">
                                            <label class="custom-file-label" for="image">Select file</label>
                                            @error('image')
                                            <div class="invalid-tooltip" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="testimonyId">Testimony</label>
                                        <textarea id="testimonyId" cols="5" rows="10" name="testimony"
                                                  class="form-control @error('testimony') is-invalid @enderror"
                                                  minlength="5"
                                                  placeholder="Testimony...">{{ old('testimony') }}</textarea>
                                        @error('testimony')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('assets/vendor/backend/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/tinymce/tinymce.min.js')}}"></script>
    <script>
        $(function () {
            'use strict'
            // activating the custom file upload field
            bsCustomFileInput.init();

        })(jQuery)
    </script>
@endsection
