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
                <p class="login-box-msg">Sign in to our Dashboard</p>


                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-4">
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
                    <div class="input-group mb-4">
                        <input id="password" type="password" placeholder="Password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div class="icheck-secondary">
                            <input type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>

{{--                        <a href="" class="small text-right forgot-link">Forgot Password?</a>--}}
                        @if(Route::has('password.reset'))
                            <a href="{{ route('password.request') }}" class="forgot-link">
                                Forgot Password?
                            </a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block">Sign In</button>
                </form>

                <div class="social-auth-links text-center mb-4">
                    <p>- OR -</p>
                    <a href="/" class="btn btn-block btn-success">
                        <i class="fas fa-long-arrow-left mr-2"></i> Back to Home page
                    </a>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
