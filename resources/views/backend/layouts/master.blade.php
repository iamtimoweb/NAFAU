<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: auto;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('pageTitle')</title>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/site/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('backend/css/backend.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/sweetAlert2/sweetalert2.min.css')}}">

    @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper" id="app">
    {{--Navbar--}}
    @includeIf('backend.partials.navigation')
    {{--End Navbar--}}

    {{--Right navbar links--}}
    @includeIf('backend.partials.left-sidebar')
    {{--End Right navbar links--}}

    {{--Content Wrapper. Contains page content--}}
    <div class="content-wrapper">
        @yield('pageContent')
    </div>
    {{--End Content Wrapper. Contains page content--}}

    {{--Control Sidebar--}}
    @includeIf('backend.partials.right-sidebar')
    {{--End Control Sidebar--}}

    {{--Main Footer--}}
    @includeIf('backend.partials.footer')
</div>

@include('sweetalert::alert')
@includeIf('backend.partials.modals')
{{--End Main Footer--}}
<script src="{{asset('backend/js/backend.js')}}"></script>
<script src="{{asset('backend/js/dashboard.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
<script src="{{asset('assets/vendor/backend/sweetAlert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/vendor/backend/overlayScrollbars/js/jquery.overlayScrollbars.js')}}"></script>
@yield('scripts')
</body>
</html>
