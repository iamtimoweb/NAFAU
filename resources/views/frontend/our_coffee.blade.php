@extends('frontend.layouts.master')
@section('pageTitle') faqs @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/our_coffee.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Our Coffee</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Our Coffee
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__our__coffee section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md-3">
                    <h5 class="section-title-sm">Noah's Ark</h5>
                    <h2 class="section-title section-title-border-half">
                        Specialty Coffee
                    </h2>
                    <p class="mb-4">
                        Grown on the banks of River Nile, this is our very
                        first. It is the result of vocational training for young Ugandans and existing coffee farmers,
                        adding them better practices. Only red berries are hand picked from our three year old trees.
                        After sun drying
                        our beans are locally processed and roasted to perfection. Taking charge every step of the way,
                        our aim is to help people create a sustainable income for themselves and the next generations
                    </p>

                </div>
                <div class="col-lg-4 align-self-center">
                    <img class="coffee__img"
                         src="{{asset('assets/frontend/images/our__coffee/our_coffee.jpg')}}" alt="chart">
                </div>
            </div>
        </div>
    </section>
    <section class="feature_primary_section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature_primary">
                        <div class="item_icon">
                            <span class="item_serial">1</span>
                            <img src="{{asset('assets/frontend/images/our__coffee/icons/icon_01.png')}}"
                                 alt="icon_not_found">
                        </div>
                        <h3 class="item_title text-uppercase">Awesome Aroma</h3>
                        <p class="mb-0">
                            {{--                            The coffee is brewed by first roasting the green coffee beans--}}
                            When it comes to coffee aroma it is more than just a pleasant smell
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature_primary">
                        <div class="item_icon">
                            <span class="item_serial">2</span>
                            <img src="{{asset('assets/frontend/images/our__coffee/icons/icon_02.png')}}"
                                 alt="icon_not_found">
                        </div>
                        <h3 class="item_title text-uppercase">high quality</h3>
                        <p class="mb-0">
                            A good quality coffee with a strong, pleasant aroma that smells fresh
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature_primary">
                        <div class="item_icon">
                            <span class="item_serial">3</span>
                            <img src="{{asset('assets/frontend/images/our__coffee/icons/icon_03.png')}}"
                                 alt="icon_not_found">
                        </div>
                        <h3 class="item_title text-uppercase">pure grades</h3>
                        <p class="mb-0">
                            Coffee graded by sorting the hulled green beans over screens with different sized holes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature_primary">
                        <div class="item_icon">
                            <span class="item_serial">4</span>
                            <img src="{{asset('assets/frontend/images/our__coffee/icons/icon_04.png')}}"
                                 alt="icon_not_found">
                        </div>
                        <h3 class="item_title text-uppercase">proper roasting</h3>
                        <p class="mb-0">
                            Our coffee cherry seeds are heated to augment aroma and flavor and ultimately increase
                            solubility.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer__section">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="offer_video">
                        <div class="overlay"></div>
                        <img src="{{asset('assets/frontend/images/our__offer__bg.jpg')}}" alt="image_not_found">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="offer_area">
                        <div class="offer_image">
                            <img src="{{asset('assets/frontend/images/our__coffee/packed_coffee.jpg')}}"
                                 class="coffee__packed__img" alt="image_not_found">
                        </div>
                        <div class="offer_content">
                            <div class="section_title text-capitalize">
                                <h2 class="small_title">
                                    <i class="fas fa-coffee"></i>
                                    what we offer
                                </h2>
                                <h3 class="big_title">
                                    divine aroma in every single cup
                                </h3>
                            </div>

                            <p>
                                Noah's Ark Farmers Association Uganda is an umbrella coffee farmers association founded
                                in 2020 as a brain child of Noah's Ark Children Ministry Uganda.
                            </p>
                            <p>
                                Noah’s Ark has provided care and shelter to thousands of
                                children in need. We provide affordable medical care and offers sponsored
                                education to children from under privileged families. By drinking our
                                speciality coffee you are supporting job creation in Uganda as well as the
                                work of Noah’s Ark, benefiting thousands of babies, children and adults.
                            </p>

                            <a href="{{route('frontend.contact')}}" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__scientific__reasons">
        <div class="container">
            <div class="row section__bg__success">
                <!-- ceo image -->
                <div class="col-lg-5 youth-sorting-coffee-image"
                     style="background-image: url('{{asset('assets/frontend/images/our__coffee/picking__coffee__bg.jpg')}}');"></div>
                <div class="col-lg-7">
                    <!-- ceo content -->
                    <div class="p-5">
                        <h2 class="section-title section-title-border-half-white text-white">Scientific Reasons Why
                            <br> Coffee is Healthy </h2>
                        <div>
                            <ul class="d-inline-block pl-0 mr-5">
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Wakes you up
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Improves your focus
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Helps relieve headache
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Makes you smarter
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Provides Essential Nutrients
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>A large source of
                                    antioxidants
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Improves good cholesterol
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Reduces inflammation
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    One of the lowest calorie drinks
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Improves blood circulation
                                </li>
                            </ul>
                            <ul class="d-inline-block pl-0">
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Helps with your memory
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Helps meet daily dietary fibre
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Great for your skin
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Enhances DNA Repair
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Reduces muscle soreness
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Lowers Stress
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Keeps you hydrated
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Helps you workout harder
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Raises metabolic rate.
                                </li>
                                <li class="font-secondary mb-3 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Good for your teeth.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
