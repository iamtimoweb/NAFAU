@extends('frontend.layouts.master')
@section('pageTitle') nursery bed and seedlings @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">What We Do.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Nursery bed and seedlings
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__our-compaign-details">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="compaign-details">
                        <img src="{{asset('assets/frontend/images/what-we-do/nursery-lg.jpg')}}" alt=""
                             class="img-fluid w-100">
                        <h4 class="my-4 text-lg">
                            Strengthening nurseries to build a stronger coffee seed sector.
                        </h4>
                        <p>
                            Worldwide, most farmers do not have access to high-quality coffee plants, which exposes
                            them to tremendous unnecessary risks. In most parts of the world, when it’s time for a
                            coffee farmer to plant a new tree on their farm, he has two choices: Save his own seed,
                            or obtain it from a neighbor or local nurseries. Many nurseries are in remote areas and
                            primitive, producing questionable varieties of questionable plant health. In most cases,
                            these nurseries take or buy seeds from local farmers or institutions but do not take
                            into consideration genetic traceability and purity of the seed—in other words, they
                            often don’t know for certain what variety they are selling. Training is limited or
                            nonexistent for most nursery owners; most learn on-the fly and have scarce access to
                            technical assistance. Additionally, the vast majority of seed producers, nurseries, and
                            farmers do not have access to tools to ensure the traceability and genetic purity of
                            varieties as they move from seed gardens to nurseries, and from nurseries to farmer
                            fields. For the specialty market, where specific coffee varieties can generate higher
                            prices for farmers, it’s
                            even more important to have access to accurate variety information.
                        </p>
                        <h4 class="border-bottom pb-3 mb-3">Solutions</h4>
                        <p>
                            Training to build a strong and professional coffee seed sector that doesn’t leave out
                            smallholder farmers, Noah's Ark Farmers Association Uganda implements a Nursery
                            Development Program aimed at building the capacity of small entrepreneurial and cooperative
                            nurseries to produce adequate volumes of genetically pure and healthy seedlings to its
                            members. Nursery staff or local extension officers employed by either the private or public
                            sector are trained-as-trainers for lasting impact.
                        </p>
                        <h4 class="border-bottom pb-3 mb-3">The Impact</h4>
                        <p>
                            Training small nurseries to operate technically sound and profitable nurseries,
                            consolidating knowledge about best practices for creating healthy and genetically pure
                            plants, and making variety authentication cheap and accessible are all foundational
                            steps in expanding access to improved, resilient varieties for smallholders.
                            Supporting the professionalization of the coffee nursery sector allows expanded access to
                            improved, resilient varieties for our smallholder farmers, leading to increased production
                            and profits. Such steps leading to increased production and profits, creating value for
                            farmers. The program also builds stronger rural organizations and creates new
                            entrepreneurial business opportunities in coffee farming communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_work bg-light section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">More</h5>
                    <h2 class="section-title section-title-border-half">
                        What We DO
                    </h2>
                    <div class="row">
                        <!-- service-item -->
                        <div class="col-sm-4">
                            <div class="what_we_do_item mb-3 ml-sm-3"
                                 style="background: url('{{asset('assets/frontend/images/what-we-do/coffee_processing.jpg')}}')">
                                <div class="what_we_do_item__title">
                                    <h5>Coffee Processing</h5>
                                </div>
                                <a href="{{route('frontend.coffee_processing')}}">Read More</a>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col-sm-4">
                            <div class="what_we_do_item mb-3"
                                 style="background: url('{{asset('assets/frontend/images/what-we-do/coffee_trainings.jpg')}}')">
                                <div class="what_we_do_item__title">
                                    <h5>Trainings on coffee farming</h5>
                                </div>
                                <a href="{{route('frontend.training_on_coffee_farming')}}">Read More</a>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col-sm-4">
                            <div class="what_we_do_item mb-3 mb-sm-0"
                                 style="background: url('{{asset('assets/frontend/images/what-we-do/demo.jpg')}}')">
                                <div class="what_we_do_item__title">
                                    <h5>Coffee demonstration gardens</h5>
                                </div>
                                <a href="{{route('frontend.coffee_demo_garden')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
