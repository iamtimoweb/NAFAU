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
                    Reset Password!
                </p>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ $email ?? old('email') }}"
                               required autocomplete="email"
                               autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password"
                               required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirm"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               placeholder="Confirm Password"
                               required autocomplete="new-password">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary bg-gradient-secondary btn-block">
                        Reset Password
                    </button>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
