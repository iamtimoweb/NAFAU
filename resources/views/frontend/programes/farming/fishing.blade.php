@extends('frontend.layouts.master')
@section('pageTitle') inter-cropping @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">
                            Farm Practices Sustaining Organic Coffee Farming.
                        </h5>
                        <h2 class="section-title section-title-border text-white">
                            Fish Farming.
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
                        <img src="{{asset('assets/frontend/images/farming/fish-farming-lg.jpg')}}" alt=""
                             class="img-fluid w-100">
                        <h4 class="my-4">
                            We have set up a highly innovative fish farming project in kalagala village which involves
                            raising fish in tanks or enclosures such as fish ponds, usually for food.
                        </h4>

                        <p>
                            Fish farming or pisciculture involves raising fish in tanks or enclosures such as fish
                            ponds,
                            usually for food. So the first thing you will need to start a small-scale fish farming
                            business
                            is basic knowledge about raising fish.
                        </p>

                        <blockquote>
                            <p>
                                At Noah's Ark Farmers Association Uganda, you will get to learn all that is needed to
                                ensure
                                success of fish farming like the source of the water, size and height of the pond and
                                soil types
                            </p>
                            <p>
                                We raise about 2000 fish specifically tilapia and catfish in each of our
                                fish ponds.
                            </p>
                        </blockquote>

                        <p>
                            Different options of fish feeds, factors considered to raise the fish will also be
                            demonstrated.
                            Join in to see an affordable and easy to manage traditional fish-growing method of earth
                            ponds
                            &#8211; a successful system used in many parts of the world.
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="fishing__item"
                                     style="background: url({{asset('assets/frontend/images/farming/pond-1.jpg')}})">
                                    <div class="fishing__item_text">
                                        <p>
                                            One of the ponds with the fish fingerlings
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="fishing__item"
                                     style="background: url({{asset('assets/frontend/images/farming/pond-2.jpg')}})">
                                    <div class="fishing__item_text">
                                        <p>
                                            Catching the fingerlings for packaging
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="fishing__item"
                                     style="background: url({{asset('assets/frontend/images/farming/packaging.jpg')}})">
                                    <div class="fishing__item_text">
                                        <p>
                                            Supplying oxygen to the fish fingerling during packaging in the hatchery
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
