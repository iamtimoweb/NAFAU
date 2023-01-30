@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create class @endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Class
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.entries.index')}}">Classes</a>
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
                        <form id="createClassForm" action="{{route('backend.entries.store')}}"
                              method="POST">
                            <div class="card-header">
                                <h3 class="card-title">Create Class</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="class_name">Class:</label>
                                        <input type="text"
                                               class="form-control @error('class_name') is-invalid @enderror"
                                               name="class_name" id="class_name"
                                               placeholder="Enter class name"
                                               required minlength="2" maxlength="30" autofocus>
                                        @error('class_name')
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
