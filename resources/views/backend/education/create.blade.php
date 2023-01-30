@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create education level @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
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
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.roles.index')}}">Education Levels</a>
                        </li>
                        <li class="breadcrumb-item active">add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <form id="createEducationLevelForm" action="{{route('backend.education.store')}}"
                              method="POST">
                            <div class="card-header">
                                <h3 class="card-title">Create Education Level</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="education_level">Education level:</label>
                                        <input type="text"
                                               class="form-control @error('education_level') is-invalid @enderror"
                                               name="education_level" id="education_level"
                                               placeholder="Enter education level"
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
