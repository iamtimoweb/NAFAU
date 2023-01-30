@extends('frontend.layouts.master')
@section('pageTitle') Farming @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/farming.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Farming</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Farming
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section__farming">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-12 mb-5">
                    <h1>Hundreds of </h1>
                    <h2>farmers have joined us</h2>
                    <p>
                        We practice an integrated farming approach which allows no synthetic chemicals, fertilizers, or
                        pesticides to be used during the cultivation or production processes. Our organic farm is
                        managed
                        as the working ecosystem it is, and our farmers employ techniques such as composting, terracing,
                        and
                        natural pest control that are often produced on the farm. Most of these techniques are
                        traditional farming methods passed down generation to generation and are more environmentally
                        beneficial because they produce less waste and maintain the natural shade canopy of the trees.
                    </p>
                </div>
            </div>
            <div class="row">

                <div class="single-service text-center col-lg-3 col-md-6 col-12">
                    <img src="{{asset('assets/frontend/images/farming/icon-images/digger.png')}}" alt="image">
                    <h4>Best Practices</h4>
                </div>

                <div class="single-service text-center col-lg-3 col-md-6 col-12">
                    <img src="{{asset('assets/frontend/images/farming/icon-images/cereals.png')}}" alt="image">
                    <h4>100% Natural</h4>
                </div>

                <div class="single-service text-center col-lg-3 col-md-6 col-12">
                    <img src="{{asset('assets/frontend/images/farming/icon-images/tractor.png')}}" alt="image">
                    <h4>Farm Equipment</h4>
                </div>

                <div class="single-service text-center col-lg-3 col-md-6 col-12">
                    <img src="{{asset('assets/frontend/images/farming/icon-images/sunrise.png')}}" alt="image">
                    <h4>Organic Food</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="abt__farming bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-6 abt__farming_bg"></div>
                <div
                    class="col-xl-7 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h5 class="section-title-sm">We practice organic coffee farming</h5>
                    <h3 class="section-title section-title-border-half">
                        What makes coffee organic?
                    </h3>
                    <p class="mb-4">
                        Have you ever wondered what makes coffee organic? Is all organic coffee fair trade? Is all fair
                        trade coffee organic? Well, about three-quarters of all fair trade coffee is grown and produced
                        organically. The primary reason – small family farmers are much more likely to embrace organic
                        farming techniques and small family farmers are the farmers that are served by fair trade
                        practices.
                    </p>

                    <h5 class="section-title-sm">In order to be</h5>
                    <h3 class="section-title section-title-border-half">
                        certified organic, coffee must:
                    </h3>
                    <ul>
                        <li class="paragraph mb-2">
                            Have been grown on land without synthetic pesticides or other prohibited substances for
                            three years
                        </li>
                        <li class="paragraph mb-2">
                            Have been grown in areas with a sufficient buffer between the organic coffee and the nearest
                            conventional crop
                        </li>
                        <li class="paragraph mb-2">
                            Be cultivated within a sustainable crop rotation plan to prevent erosion, the depletion of
                            soil nutrients, and control for pests
                        </li>
                        <li class="paragraph">
                            Keep careful records detailing production techniques and yields and allow internal and
                            external random inspections of the farm by the cooperative’s technical advisors and the
                            certifying agency’s inspectors
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-objectives section-sm">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9">
                    <h3 class="section-title section-title-border-half">
                        The Benefits of Organic Coffee
                    </h3>
                    <h4>
                        For the farmer
                    </h4>
                    <p>
                        Organic farming makes the land live and the soil more fertile, which increases both quality
                        and quantity over the years.
                    </p>
                    <h4>
                        For the farming community
                    </h4>
                    <p>
                        Organic farming decreases the amount of chemicals released into the atmosphere and drinking
                        water supply.
                    </p>
                    <h4>
                        For the health-conscious consumer
                    </h4>
                    <p>
                        Organic products are healthier for the human body and contain all natural ingredients.
                    </p>
                    <h4>
                        For the environment
                    </h4>
                    <p>
                        Organic products keep dangerous chemicals out of the environment and maintain the natural
                        balance of the local ecosystems.
                    </p>
                    <h4>
                        For the social justice advocate
                    </h4>
                    <p>
                        Organic coffee sells at a higher value.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="farm__practices bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Farm Practices Sustaining</h5>
                    <h2 class="section-title section-title-border">
                        Organic Coffee Farming
                    </h2>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="single__farm_practice">
                        <img src="{{asset('assets/frontend/images/farming/inter-cropping.jpg')}}" alt="image">
                        <div class="content">
                            <h4>Inter-cropping</h4>
                            <p>
                                On-farm research indicates that Coffee Banana inter-cropping can contribute to all three
                                Climate-Smart Agriculture pillars such as productivity, resilience and greenhouse
                                gas emission.
                            </p>
                            <!--  Button  -->
                            <a class="button" href="{{route('frontend.inter-cropping')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="single__farm_practice">
                        <img src="{{asset('assets/frontend/images/farming/fish-farming.jpg')}}" alt="image">
                        <div class="content">
                            <h4>Fish Farming</h4>
                            <p>
                                We have set up a highly innovative fish farming project in kalagala village which
                                involves raising fish in tanks or enclosures such as fish ponds, usually for food.
                            </p>
                            <!--  Button  -->
                            <a class="button" href="{{route('frontend.fish-farming')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single__farm_practice">
                        <img src="{{asset('assets/frontend/images/farming/animal-farming.jpg')}}" alt="image">
                        <div class="content">
                            <h4>Animal Farming</h4>
                            <p>
                                We need to constantly innovate to maintain the sustainability of the farm. We find an
                                opportunity to utilize farm organic wastes and residues commonly found within the farm.
                            </p>
                            <!--  Button  -->
                            <a class="button" href="{{route('frontend.animal-farming')}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
