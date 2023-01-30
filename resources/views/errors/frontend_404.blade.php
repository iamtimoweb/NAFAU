@extends('frontend.layouts.master')
@section('pageTitle') 404 error page @endsection
@section('pageContent')
    <!-- Start Error Area-->
    <section class="page-error">
        <div class="dark-overlay"></div>
        <div class="container">
            <div class="error-404">
                <div class="error mb-lg-4 mb-3">
                    4<span><i class="ti-face-sad"></i></span>4
                </div>
                <h3 class="mb-lg-4 mb-sm-3 mb-2 text-white">Well, It Is Embarrassing, Right!</h3>
                <p class="mb-lg-4 mb-sm-3 mb-2 text-white">But The Page You Are Searching For Does Not Exist.</p>
                <a href="{{route('frontend.welcome')}}" class="btn btn-primary">Back To Home</a>
            </div>
        </div>
    </section>
    <!--/ End Error Area-->
    <!--/ End Error Area-->
@endsection
