@extends('frontend.layouts.master')
@section('pageTitle') malnutrition program @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/frontend/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/frontend/plugins/slick/slick-theme.css')}}">
@endsection
@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/nutrition_bg.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Malnutrition</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Malnutrition
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__malnutrition section-sm">
        <div class="container">
            <div class="row">
                <div class="section-title mb-0 text-center col-12">
                    <h1>Save Lives</h1>
                    <h2>Malnutrition a huge problem</h2>
                    <p>
                        Malnutrition is a huge problem in Uganda. The first six years of a child's life are essential
                        for its development. We have started the fight against malnutrition and already helped hundreds
                        of children get back on track with their development and have even saved many from death.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-3 mb-lg-0">
                    <h4 class="section-title section-title-border-half">
                        Our first aim is prevention
                    </h4>
                    <p>
                        Poverty often is the cause of malnutrition but lack of knowledge and an unbalanced diet are
                        large contributors as well. That is why we conduct outreaches in the wide area around us. We
                        educate these remote communities about the dangers of malnutrition, how to recognize the
                        symptoms and signals of malnutrition and how to create a more balanced diet. Many believe there
                        is no cure for malnutrition other then adding more food, many other hospitals turn malnourished
                        children away. We often call on former patients and their parents to bring their testimony about
                        what is possible with the right treatment.
                    </p>
                </div>
                <div class="col-lg-5">
                    <h4 class="section-title section-title-border-half">
                        Treatment from home or in our clinic
                    </h4>
                    <p>
                        If prevention is too late we start treatment with therapeutic peanut paste or infant formula. We
                        coach the parents or caretakers as they come in to our clinic for checkups. If a child is
                        severely malnourished we will admit him or her in our malnutrition center for extra care and
                        attention by our medical staff. In this way we keep a close eye and can train the caregiver even
                        more.
                    </p>
                </div>
            </div>
            <div class="row malnutrition__slider mt-4">
                <div class="col-lg-3 px-0">
                    <div class="malnutrition__slider_image">
                        <img class="img-fluid w-100"
                             src="{{asset('assets/frontend/images/malnutrition/small/slide__sm1.jpg')}}" alt="">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('assets/frontend/images/malnutrition/slide01.jpg')}}">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="malnutrition__slider_image">
                        <img class="img-fluid w-100"
                             src="{{asset('assets/frontend/images/malnutrition/small/slide__sm2.jpg')}}" alt="">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('assets/frontend/images/malnutrition/slide02.jpg')}}">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="malnutrition__slider_image">
                        <img class="img-fluid w-100"
                             src="{{asset('assets/frontend/images/malnutrition/small/slide__sm3.jpg')}}" alt="">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('assets/frontend/images/malnutrition/slide03.jpg')}}">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="malnutrition__slider_image">
                        <img class="img-fluid w-100"
                             src="{{asset('assets/frontend/images/malnutrition/small/slide__sm4.jpg')}}" alt="">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('assets/frontend/images/malnutrition/slide04.jpg')}}">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="malnutrition__slider_image">
                        <img class="img-fluid w-100"
                             src="{{asset('assets/frontend/images/malnutrition/small/slide__sm5.jpg')}}" alt="">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('assets/frontend/images/malnutrition/slide05.jpg')}}">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="malnutrition__donation_banner section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-white text-uppercase mb-3">
                        Help us fight
                    </h3>
                    <p>
                        Already hundreds of children have been saved from malnutrition and its consequences but we need
                        your support to continue. We offer the services, food and medication for free because the
                        beneficiaries would not be able to cover the cost of the treatment. Will you join the fight?
                    </p>
                    <a href="{{route('frontend.compaigns.malnutrition')}}" class="btn btn-primary">Join the fight</a>
                </div>
            </div>
        </div>
    </section>
@endsection
