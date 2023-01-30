@extends('backend.layouts.auth')

@section('pageContent')
    <div class="login-box">
        <div class="login-logo">
            <a href="/">
                <img src="{{asset('assets/frontend/images/logo.jpg')}}" alt="">
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="card border-0 shadow">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    Enter your email address to receive a password reset link.
                </p>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               placeholder="example@company.com"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary bg-gradient-secondary btn-block">
                        Send Password Reset Link
                    </button>
                </form>

                <div class="social-auth-links text-center mb-4">
                    <p>- OR -</p>
                    <a href="{{route('login')}}" class="btn btn-block btn-success">
                        <i class="fas fa-long-arrow-left mr-2"></i> Back
                    </a>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
