@extends('frontend.layouts.master')
@section('pageTitle') compaigns @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-title.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Our Compaigns</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Our Compaigns
                            <i class="ti-angle-right"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__our-coffee">
        <div class="container">
            <div class="row"></div>
        </div>
    </section>
@endsection
