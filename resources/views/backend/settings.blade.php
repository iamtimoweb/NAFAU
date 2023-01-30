@extends('backend.layouts.master')
<!-- Page title -->
@section('pageTitle') settings @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection

@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General site settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">settings</li>
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
                        <form id="settingsForm" action="{{route('backend.site.post_settings')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="site_name">Site Name:</label>
                                        <input type="text" name="site_name" autofocus
                                               class="form-control @error('site_name') is-invalid @enderror"
                                               id="site_name" placeholder="site name..."
                                               value="@if($info){{ $info->site_name }}@endif"
                                               maxlength="5" minlength="5" required>
                                        @error('site_name')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address:</label>
                                        <input type="email" name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               id="email" placeholder="your email..."
                                               value="@if($info){{ $info->email }}@endif"
                                               minlength="5" maxlength="30" required>
                                        @error('email')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact_no">Contact No.</label>
                                        <input type="text" name="contact_no"
                                               class="form-control @error('contact_no') is-invalid @enderror "
                                               id="contact_no"
                                               minlength="10" pattern="\d+" maxlength="10"
                                               value="@if($info){{ $info->contact_no }}@endif"
                                               required
                                               placeholder="your contact number...">
                                        @error('contact_no')
                                        <span class="invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="location">Location.</label>
                                        <input type="text" name="location"
                                               class="form-control @error('location') is-invalid @enderror "
                                               id="location"
                                               minlength="5" maxlength="50"
                                               value="@if($info){{ $info->location }}@endif"
                                               required
                                               placeholder="your company location...">
                                        @error('location')
                                        <span class="invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="twitter">Twitter link:</label>
                                        <input type="url"
                                               name="twitter"
                                               class="form-control @error('twitter') is-invalid @enderror"
                                               id="twitter" placeholder="your twitter url..."
                                               value="@if($info) {{ $info->twitter }} @endif" maxlength="100">
                                        @error('twitter')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="facebook">Facebook link:</label>
                                        <input type="url"
                                               name="facebook"
                                               class="form-control @error('facebook') is-invalid @enderror"
                                               id="facebook" placeholder="your facebook url..."
                                               value="@if($info) {{ $info->facebook }} @endif" maxlength="100">
                                        @error('facebook')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Enable/Disable</label>
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="frontend_website" id="frontend_website"
                                            @if($info) {{$info->frontend_website ? 'checked':''}} @endif>
                                            <label for="frontend_website">
                                                Frontend Website
                                                <i class="fa fa-question-circle" data-toggle="tooltip"
                                                   data-placement="bottom" title=""
                                                   data-original-title="Enable/Disable frontend website"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="linkedin">LinkedIn link:</label>
                                        <input type="url"
                                               name="linkedin"
                                               class="form-control @error('linkedin') is-invalid @enderror"
                                               id="linkedin" placeholder="your linkedin url..."
                                               value="@if($info) {{ $info->linkedin }} @endif" maxlength="100">
                                        @error('linkedin')
                                        <div class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">
                                    save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
