@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') Profile @endsection

@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile #{{$user->id}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
                                                Role:{{ $user->roles ? $user->roles->pluck('name')->first()
                                : 'N/A' }}
                                            </i>
                                        </span>
                                        <span class="text-black-50 mt-1">{{ $user->email }}</span>
                                    </div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <!-- Profile -->
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile</h4>
                                        </div>
                                        <form id="updateProfileForm"
                                              action="{{route('backend.update.profile', $user->id)}}"
                                              method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="labels" for="firstname">First Name</label>
                                                    <input type="text"
                                                           class="form-control @error('firstname') is-invalid @enderror"
                                                           name="firstname" placeholder="First Name"
                                                           id="firstname"
                                                           value="{{ old('firstname') ? old('firstname') : $user->firstname }}"
                                                           minlength="5" maxlength="15">
                                                    @error('firstname')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="labels" for="lastname">Last Name</label>
                                                    <input type="text"
                                                           class="form-control @error('lastname') is-invalid @enderror"
                                                           name="lastname" placeholder="Last Name"
                                                           id="lastname"
                                                           value="{{ old('lastname') ? old('lastname') : $user->lastname }}"
                                                           minlength="5" maxlength="15">
                                                    @error('lastname')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="phone_no">Mobile Number</label>
                                                    <input type="text" name="phone_no"
                                                           class="form-control @error('phone_no') is-invalid @enderror "
                                                           id="phone_no"
                                                           minlength="10" pattern="\d+" maxlength="10"
                                                           value="{{ old('phone_no') ? old('phone_no') : $user->phone_no }}"
                                                           required
                                                           placeholder="phone or mobile number">
                                                    @error('phone_no')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary">
                                                    Update Profile
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Profile-->
                                    <hr>
                                    <!-- Change Password -->
                                    <div class="p-3 py-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Change Password</h4>
                                        </div>
                                        <form id="changePasswordForm" action="{{route('backend.change-password')}}"
                                              method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="current_password">Current Password</label>
                                                    <input type="password" name="current_password"
                                                           class="form-control @error('current_password') is-invalid @enderror"
                                                           id="current_password"
                                                           placeholder="Current Password" required minlength="8"
                                                           maxlength="100">
                                                    @error('current_password')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="new_password">New Password</label>
                                                    <input type="password" name="new_password"
                                                           class="form-control @error('new_password') is-invalid @enderror"
                                                           id="new_password"
                                                           placeholder="New Password" required minlength="8"
                                                           maxlength="100">
                                                    @error('new_password')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="confirm_new_password">Confirm New Password</label>
                                                    <input type="password" name="confirm_new_password"
                                                           class="form-control @error('confirm_new_password') is-invalid @enderror"
                                                           id="confirm_new_password" required minlength="8"
                                                           maxlength="100"
                                                           placeholder="Confirm New Password">
                                                    @error('confirm_new_password')
                                                    <span class="invalid-tooltip" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Change Password
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Change Password -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
