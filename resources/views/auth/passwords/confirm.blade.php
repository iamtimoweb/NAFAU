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
                    Confirm Password!
                </p>

                <form action="{{ route('password.confirm') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password.."
                               required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary bg-gradient-secondary btn-block">
                        Confirm Password
                    </button>

                </form>

                <div class="social-auth-links text-center mb-4">
                    <p>- OR -</p>
                    @if (Route::has('password.request'))
                        <a class="btn btn-block btn-info" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    @endif
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
