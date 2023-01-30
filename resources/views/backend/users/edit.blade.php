@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') edit user @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/backend/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
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
                        <li class="breadcrumb-item active">update</li>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        @if(@empty($user->image))
                                            <img src="{{asset('assets/backend/images/default.jpg')}}" class="img-circle"
                                                 width="128px"
                                                 alt="User Profile Image">
                                        @else
                                            <img src="{{ $user->imagePath }}" class="img-circle" width="128px"
                                                 alt="User Profile Image">
                                        @endif

                                        <span class="font-weight-bold mt-1">
                                            {{ $user->getFullNameAttribute() }}
                                        </span>
                                        <span class="text-black-50 mt-1">
                                            <i>
                                                Role : {{ $user->roles ? $user->roles->pluck('name')->first()
                                : 'N/A' }}
                                            </i>
                                        </span>
                                        <span class="text-black-50 mt-1">{{ $user->email }}</span>
                                    </div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Edit User #{{$user->id}}</h4>
                                        </div>

                                        <form id="userEditForm" action="{{route('backend.users.update', $user->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="firstname">Firstname</label>
                                                    <input type="text" name="firstname"
                                                           class="form-control @error('firstname') is-invalid @enderror"
                                                           id="firstname" value="{{ $user->firstname }}"
                                                           placeholder="Enter firstname"
                                                           required minlength="3" maxlength="15">
                                                    @error('firstname')
                                                    <span class="invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lastname">Lastname</label>
                                                    <input type="text" name="lastname"
                                                           class="form-control @error('lastname') is-invalid @enderror"
                                                           id="lastname" value="{{ $user->lastname }}"
                                                           placeholder="Enter lastname"
                                                           required minlength="3" maxlength="15">
                                                    @error('lastname')
                                                    <span class="invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           id="email"
                                                           value="{{ $user->email }}" placeholder="email address"
                                                           required maxlength="30">
                                                    @error('email')
                                                    <span class="invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone_no">Mobile Number</label>
                                                    <input type="text" name="phone_no"
                                                           class="form-control @error('phone_no') is-invalid @enderror "
                                                           id="phone_no"
                                                           minlength="10" pattern="\d+" maxlength="15"
                                                           value="{{ $user->phone_no }}"
                                                           required
                                                           placeholder="phone or mobile number">
                                                    @error('phone_no')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="roles">Assign Roles:</label>
                                                    <select name="roles[]" id="roles"
                                                            class="form-control @error('roles') is-invalid @enderror select2"
                                                            multiple>
                                                        @foreach($roles as $role)
                                                            <option value="{{$role->id}}"
                                                                    @if($user->roles->pluck('id')->contains($role->id)) selected @endif>{{$role->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('roles')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="image">Update Photo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" accept=".jpeg, .jpg, .png"
                                                               class="custom-file-input @error('image') is-invalid @enderror"
                                                               id="image">
                                                        <label class="custom-file-label" for="image">Select image or
                                                            leave
                                                            blank</label>
                                                        @error('image')
                                                        <span class="invalid-tooltip" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" name="is_active" id="is_active"
                                                               @if($user->is_active) checked @endif>
                                                        <label for="is_active">
                                                            Is Active
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6"></div>
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
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
    <script src="{{asset('assets/vendor/backend/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/backend/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            'use strict'
            // activating the custom file upload field
            bsCustomFileInput.init();
            // select2 multi
            $('.select2').select2({
                placeholder: "select a role",
                theme: 'bootstrap4'
            });
        })(jQuery)
    </script>
@endsection
