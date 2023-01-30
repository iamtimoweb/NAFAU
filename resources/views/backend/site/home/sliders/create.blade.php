@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create user @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Slider
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.sliders.index')}}">Sliders</a>
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

                        <form id="createSliderForm" action="{{route('backend.sliders.store')}}" method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Create Slider
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror"
                                               id="title" value="{{ old('title') }}" placeholder="title..."
                                               minlength="5" maxlength="255">
                                        @error('title')
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
                                        <label for="txtId">Text</label>
                                        <textarea id="txtId" cols="5" rows="10" name="txt"
                                                  class="form-control @error('txt') is-invalid @enderror" minlength="5"
                                                  placeholder="Slider text...">{{ old('txt') }}</textarea>
                                        @error('txt')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="is_active" id="is_active">
                                            <label for="is_active">
                                                Is Active
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('assets/vendor/backend/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            'use strict'
            // activating the custom file upload field
            bsCustomFileInput.init();
        })(jQuery)
    </script>
@endsection
