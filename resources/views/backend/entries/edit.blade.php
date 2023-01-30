@extends('backend.layouts.master')
@section('pageTitle') edit classname @endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Class #{{$entry->id}}
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
                        <form id="editClassForm"
                              action="{{route('backend.entries.update', $entry->id)}}"
                              method="POST">
                            <div class="card-header">
                                <h3 class="card-title">Edit Class</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PATCH')
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="class_name">Education Level:</label>
                                        <input type="text"
                                               class="form-control @error('class_name') is-invalid @enderror"
                                               name="class_name" id="class_name"
                                               placeholder="Enter education level"
                                               value="{{$entry->class_name}}"
                                               required minlength="3" maxlength="255" autofocus>
                                        @error('class_name')
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
                                       class="btn btn-primary">
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
