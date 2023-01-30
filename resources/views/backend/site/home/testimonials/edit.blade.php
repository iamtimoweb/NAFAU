@extends('backend.layouts.master')
<!-- Page member -->
@section('pagemember') edit testimonial @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Testimonial
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.testimonials.index')}}">
                                Testimonials
                            </a>
                        </li>
                        <li class="breadcrumb-item active">update</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        @if(@empty($testimonial->image))
                                            <img src="{{asset('assets/backend/images/default.jpg')}}" class="img-circle"
                                                 width="128px"
                                                 alt="Testimonial Profile Image">
                                        @else
                                            <img src="{{ $testimonial->imagePath }}" class="img-circle" width="128px"
                                                 alt="Testimonial Profile Image">
                                        @endif

                                        <span class="font-weight-bold mt-1">
                                            {{ $testimonial->member }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Edit Testimonial #{{$testimonial->id}}</h4>
                                        </div>
                                        <form id="updateTestimonialForm"
                                              action="{{route('backend.testimonials.update', $testimonial->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @method('PATCH')
                                            <div class="card-header">
                                                <h3 class="card-member">
                                                    Update Testimonial
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="member">Member</label>
                                                        <input type="text" name="member"
                                                               class="form-control @error('member') is-invalid @enderror"
                                                               id="member" value="{{ $testimonial->member }}"
                                                               placeholder="member name...">
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
                                                            <label class="custom-file-label" for="image">Select image or
                                                                leave blank</label>
                                                            @error('image')
                                                            <div class="invalid-tooltip" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="testimonyId">Testimonial</label>
                                                        <textarea id="testimonyId" cols="5" rows="10" name="testimony"
                                                                  class="form-control @error('testimony') is-invalid @enderror"
                                                                  minlength="5"
                                                                  placeholder="Testimonial...">{{ $testimonial->testimony }}</textarea>
                                                        @error('testimony')
                                                        <div class="invalid-tooltip" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                                <a href="{{route('backend.testimonials.index')}}"
                                                   class="btn btn-primary">
                                                    Back
                                                </a>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
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
