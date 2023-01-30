@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') create user @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        User
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.users.index')}}">Users</a>
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
                        <form id="userCreateForm" action="{{route('backend.users.store')}}" method="POST"
                              enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Create User
                                </h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Firstname:</label>
                                        <input type="text" name="firstname"
                                               class="form-control @error('firstname') is-invalid @enderror"
                                               id="firstname" value="{{ old('firstname') }}"
                                               placeholder="Enter firstname"
                                               required minlength="3" maxlength="15">
                                        @error('firstname')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Lastname:</label>
                                        <input type="text" name="lastname"
                                               class="form-control @error('lastname') is-invalid @enderror"
                                               id="lastname" value="{{ old('lastname') }}" placeholder="Enter lastname"
                                               required minlength="3" maxlength="15">
                                        @error('lastname')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone_no">Phone/Mobile No.</label>
                                        <input type="text" name="phone_no"
                                               class="form-control @error('phone_no') is-invalid @enderror "
                                               id="phone_no"
                                               minlength="10" pattern="\d+" maxlength="10" value="{{ old('phone_no') }}"
                                               required
                                               placeholder="phone or mobile number">
                                        @error('phone_no')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email"
                                               class="form-control @error('email') is-invalid @enderror" id="email"
                                               value="{{ old('email') }}" placeholder="email address"
                                               required maxlength="30">
                                        @error('email')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="password">Password:</label>
                                        <input type="password" name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               id="password"
                                               placeholder="password" required minlength="8" maxlength="100"
                                               value="{{ old('password') }}">
                                        @error('password')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password-confirm">Confirm Password:</label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control @error('password_confirmation') is-invalid @enderror"
                                               id="password-confirm" required minlength="8" maxlength="100"
                                               data-parsley-equalto="#password"
                                               placeholder="confirm password"
                                               value="{{ old('password_confirmation') }}">
                                        @error('password_confirmation')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="roles">Assign Roles:</label>
                                        <select name="roles[]" id="roles"
                                                class="form-control select2 @error('roles') is-invalid @enderror"
                                                multiple>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="file">Photo:</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" value="{{ old('image') }}"
                                                   accept=".jpeg, .jpg, .png"
                                                   class="custom-file-input @error('image') is-invalid @enderror"
                                                   id="image"
                                                   required>
                                            <label class="custom-file-label" for="image">Upload user image</label>
                                            @error('image')
                                            <span class="invalid-tooltip" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
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
    <script src="{{asset('assets/vendor/backend/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            'use strict'
            // activating the custom file upload field
            bsCustomFileInput.init();
            // select2 multi
            $('.select2').select2({
                placeholder: "select a role" ,
                theme: 'bootstrap4'
            });
        })(jQuery)
    </script>
@endsection
