<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="noah's ark farmers association uganda,nafau">
    <meta name="author" content="Djangood">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }} | @yield('pageTitle')</title>

    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/meanMenu/css/meanMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/owl.carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/magnific-popup/css/magnific_popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/glightbox/css/glightbox.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/frontend/plugins/fontawesome-free/css/all.min.css') }}">
    @yield('styles')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-233728312-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-233728312-1');
    </script>

</head>
{{-- oncontextmenu="return false;" --}}

<body>
    @includeIf('frontend.partials.header')
    @yield('pageContent')
    @includeIf('frontend.partials.footer')
    <!-- Scripts -->
    <script src="{{ asset('frontend/js/frontend.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/meanMenu/js/meanMenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/frontend/plugins/magnific-popup/js/jquery.magnific.popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @yield('scripts')
</body>

</html>
