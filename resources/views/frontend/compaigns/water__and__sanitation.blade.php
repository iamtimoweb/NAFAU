@extends('frontend.layouts.master')
@section('pageTitle') compaigns @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">Compaigns.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Water and sanitation.
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
                        <h3 class="section-title section-title-border-half">
                            Understanding Water and Sanitation
                        </h3>
                        <p>
                            There are many of our farmer communities that were visited over the past years in the cause
                            of our humanitarian services in the areas of kayunga, primarily in the villages that make up
                            kangulumira that are in desperate need of need of clean water.
                        </p>
                        <p>
                            These are farmer communities in kangulumira, in kayunga district, that no one will tell you
                            about, they’re practically in Uganda. Truly, with very high temperature, sandy, dry, and
                            brutal.
                        </p>
                        <p>
                            And there’s no place to escape any of it. The only available water in such places lies in
                            old holes (Well) in the ground, dirty stream water and faulty manual borehole. The women in
                            the communities have no choice but to hoist water out by rope, one bucket a time. As a
                            result, their hands are gnarly, shredded, calloused, and hard.
                        </p>

                        <div class="row">
                            <div class="col-lg-6 my-4">
                                <div class="water_and_sanitation__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/water__and__sanitation/water__and__sanitation-1.jpg')}})">
                                    <div class="water_and_sanitation__item_text">
                                        <p>
                                            Woman drawing water from a dirty stream.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-4">
                                <div class="water_and_sanitation__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/water__and__sanitation/water__and__sanitation-2.jpg')}})">
                                    <div class="water_and_sanitation__item_text">
                                        <p>
                                            People make long queues to get water.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            The Children walk on every morning before sunrise and spend hours to find unclean water for
                            drinking hence this affect their access to education the muddy stream for the water they
                            share with both their neighbors and livestock; the water they consume is dirty and unclean
                            which as a result they constantly suffer from stomach pain, typhoid and diarrhea and loose
                            children to water-related diseases!
                        </p>
                        <p>
                            This is a world most of us don’t know and many people live in it, in such hard condition to
                            find a clean and safe water.
                        </p>
                        <p>
                            And yet, it’s the reality for 663 million people around the world lack access to clean water
                            and an estimated 1,375 people die everyday as a result of contaminated water! You and I got
                            lucky.
                        </p>
                        <p>
                            As we happened to be born in places where we’ve never had to worry about finding water or
                            deal with the fear that our water might affect the health of our families.
                        </p>
                        <p>
                            Help provide Clean water and save lives!
                        </p>
                        <h3 class="section-title section-title-border-half">Make a donation</h3>
                        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/water-and-sanitation-1" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="600px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__compaigns bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">More</h5>
                    <h2 class="section-title section-title-border-half">
                        Compaigns
                    </h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="compaign__item">
                                <img src="{{asset('assets/frontend/images/compaigns/malnutrition.jpg')}}" alt="">
                                <div class="content">
                                    <h4>
                                        Malnutrition
                                    </h4>
                                    <p>
                                        Often lost in discussions around the subject of hunger, especially in the
                                        context of the discourse to "end world hunger," or to "feed the world."
                                    </p>
                                    <a href="{{route('frontend.compaigns.malnutrition')}}" class="compaign_link">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="compaign__item">
                                <img src="{{asset('assets/frontend/images/compaigns/education.jpg')}}" alt="">
                                <div class="content">
                                    <h4>
                                        Education
                                    </h4>
                                    <p>
                                        Education is a purposeful activity directed at achieving certain aims, such as transmitting
                                        knowledge or fostering skills and character traits.
                                    </p>
                                    <a href="{{route('frontend.compaigns.education')}}" class="compaign_link">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="compaign__item">
                                <img src="{{asset('assets/frontend/images/compaigns/sustainable_coffee_production.jpg')}}"
                                     alt="">
                                <div class="content">
                                    <h4>
                                        Sustainable Coffee Production
                                    </h4>
                                    <p>
                                        Sustainably produced coffee is grown in a way that conserves nature and provides a good livelihood for the people who grow and process it.
                                    </p>
                                    <a href="{{route('frontend.compaigns.sustainable__coffee__production')}}"
                                       class="compaign_link">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
