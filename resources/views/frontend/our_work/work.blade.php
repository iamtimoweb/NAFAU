@extends('frontend.layouts.master')
@section('pageTitle') our work @endsection
@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/our_work.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">What We Do</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                         What We Do
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="our_work">
        <div class="container">
            <div class="row ">
            <!-- service-item -->
                <div class="col-md-3">
                    <div class="what_we_do_item mb-3"
                         style="background: url('{{asset('assets/frontend/images/what-we-do/coffee_trainings.jpg')}}')">
                        <div class="what_we_do_item__title">
                            <h5>Trainings on coffee farming</h5>
                        </div>

                        <a href="{{route('frontend.training_on_coffee_farming')}}">Read More</a>
                    </div>
                </div>
                <!-- service-item -->
                <div class="col-md-3">
                    <div class="what_we_do_item mb-3"
                         style="background: url('{{asset('assets/frontend/images/what-we-do/coffee_processing.jpg')}}')">
                        <div class="what_we_do_item__title">
                            <h5>Coffee Processing</h5>
                        </div>
                        <a href="{{route('frontend.coffee_processing')}}">Read More</a>
                    </div>
                </div>
                <!-- service-item -->
                <div class="col-md-3">
                    <div class="what_we_do_item mb-3"
                         style="background: url('{{asset('assets/frontend/images/what-we-do/demo.jpg')}}')">
                        <div class="what_we_do_item__title">
                            <h5>Coffee demonstration gardens</h5>
                        </div>
                        <a href="{{route('frontend.coffee_demo_garden')}}">Read More</a>
                    </div>
                </div>
                <!-- service-item -->
                <div class="col-md-3">
                    <div class="what_we_do_item"
                         style="background: url('{{asset('assets/frontend/images/what-we-do/nursery_bed.jpg')}}')">
                        <div class="what_we_do_item__title">
                            <h5>Nursery Bed and Seedlings</h5>
                        </div>
                        <a href="{{route('frontend.nursery_bed')}}">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section_our_strategy bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h5 class="section-title-sm">Our Strategy</h5>
                    <h2 class="section-title section-title-border-half">
                        sustainable food
                        <br> and agriculture
                    </h2>
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="mb-5">
                                In 2021–2025, our strategic vision proposes a coordinated approach of
                                NAFAU intervention for sustainable food and agriculture, which meet the
                                needs and expectations of Farmer Organisations and the agriculture sector in Uganda. The
                                result of this reflection constitute entry points for an advocacy towards
                                transnational policies, strategies and programs aiming to the transition of agriculture
                                combining high productivity, economic viability and respect for the
                                environment, while being based on inclusion and social justice.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="strategy_active owl-carousel">
                        <div class="strategy__item">
                            <img src="{{asset('assets/frontend/images/NAFAU_strategic_plan.jpg')}}" alt="">
                            <div class="content">
                                <h4>
                                    Our 2021–2025 Strategy
                                </h4>
                                <p>
                                    We will achieve this aim through an agricultural R&D program that advances three
                                    interconnected objectives.
                                </p>
                                <a href="{{route('frontend.full__strategy')}}" class="full_strategy_link">
                                    Read the full strategy here
                                </a>
                            </div>
                        </div>

                        <div class="strategy__item">
                            <img src="{{asset('assets/frontend/images/resistant_coffee.jpg')}}"
                                 alt="">
                            <div class="content">
                                <h4>
                                    Objective 1
                                </h4>
                                <p>
                                    Enhance the productivity of climate-resilient coffee production in order to increase
                                    farmer profitability, the linchpin of farmer economic sustainability
                                </p>
                            </div>
                        </div>

                        <div class="strategy__item">
                            <img src="{{asset('assets/frontend/images/coffee_trees.jpg')}}"
                                 alt="">
                            <div class="content">
                                <h4>
                                    Objective 2
                                </h4>
                                <p>
                                    Improve the quality potential of coffee trees for different market segments
                                    (from commercial to premium to specialty, encompassing both arabica and robusta)
                                </p>
                            </div>
                        </div>
                        <div class="strategy__item">
                            <img src="{{asset('assets/frontend/images/estimated.jpg')}}"
                                 alt="">
                            <div class="content">
                                <h4>
                                    Objective 3
                                </h4>
                                <p>
                                    Mitigate supply chain risk by enhancing the competitiveness amongst our farmers and
                                    driving an innovation agenda toward climate goals
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
