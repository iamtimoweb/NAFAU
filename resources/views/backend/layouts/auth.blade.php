<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - @yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('backend/css/backend.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    @yield('styles')
</head>
<body class="hold-transition login-page">

@yield('pageContent')

@include('sweetalert::alert')
<script src="{{asset('backend/js/backend.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>
