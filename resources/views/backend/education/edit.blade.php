@extends('backend.layouts.master')
@section('pageTitle') edit education level @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/parsely/css/parsely.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Education Level #{{$education->id}}
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.education.index')}}">Education Levels</a>
                        </li>
                        <li class="breadcrumb-item active">edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <form id="createEducationLevelForm"
                              action="{{route('backend.education.update', $education->id)}}"
                              method="POST">
                            <div class="card-header">
                                <h3 class="card-title">Edit Education Level</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PATCH')
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="education_level">Education Level:</label>
                                        <input type="text"
                                               class="form-control @error('education_level') is-invalid @enderror"
                                               name="education_level" id="education_level"
                                               placeholder="Enter education level"
                                               value="{{$education->education_level}}"
                                               required minlength="3" maxlength="255" autofocus>
                                        @error('education_level')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                    <a href="{{route('backend.education.index')}}"
                                       class="btn btn-primary bg-gradient-primary">
                                        <i class="fa fa-long-arrow-alt-left"></i>
                                        Back
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('assets/vendor/backend/parsely/js/parsley.min.js')}}"></script>
@endsection
