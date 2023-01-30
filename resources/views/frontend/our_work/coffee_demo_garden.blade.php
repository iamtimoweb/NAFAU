@extends('frontend.layouts.master')
@section('pageTitle') coffee demonstration garden @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">What We Do.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Coffee demonstration farms.
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
                        <img src="{{asset('assets/frontend/images/what-we-do/demo_lg.jpg')}}" alt=""
                             class="img-fluid w-100">
                        <h4 class="my-4">
                            Our coffee demonstration farms bring together a diversity of farmers geared towards creating
                            a modernized change in the farming strategies tackling areas of coffee farming.
                        </h4>

                        <p>
                            Noah's Ark Farmers Association Uganda has managed to setup two coffee demonstration
                            farms whereby one is located at kalagala village sited on 22 acre land and the other located at
                            mutukula village sited on 8 acre land which are established to also grow food to feed the
                            children from Noah's Ark Children Ministry Uganda and to act as a demonstration farm to the
                            community, where local farmers can learn modern agricultural methods.
                        </p>
                        <p>
                            In our coffee demonstration gardens we encompass both arabica and robusta coffee farming.
                            The Arabica coffee beans is the most popular type of coffee which has higher quality beans and
                            are referred to as gourmet coffee. It has a half the amount of caffeine as Robusta and have more
                            pleasing flavours and a smoother aromatic properties that have a sweeter, more complex flavor
                            that you can drink straight whereas Robusta coffee beans are of a lower grade than Arabica which
                            is also cheaper and stronger, and are typically grown at lower elevations. They are easier to
                            grow and maintain, and they are also more disease resistant that is s easier to tend to on the
                            farm, has also higher yield and is less sensitive to insect.
                        </p>
                        <h4 class="border-bottom pb-3 mb-3">Farmers Visiting Our Coffee Demonstration Farm</h4>
                        <div class="coffee_demo_garden__item mb-3"
                             style="background: url({{asset('assets/frontend/images/what-we-do/training_on_demo_farm.jpg')}})">
                            <div class="coffee_demo_garden_text">
                                <p>
                                    Farmers visiting one of our coffee demo farm in kalagala where they learnt about the
                                    new effective style of planting coffee in the spacing of 3x1
                                </p>
                            </div>
                        </div>
                        <p>
                            As we set our strategic directions, NAFAU is committed to working better together with the
                            members, characterized by stronger coherence and collaboration as a contribution to achieve
                            sustainable development indicators and goals.
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
                            <div class="what_we_do_item ml-sm-3"
                                 style="background: url('{{asset('assets/frontend/images/what-we-do/nursery_bed.jpg')}}')">
                                <div class="what_we_do_item__title">
                                    <h5>Nursery Bed and Seedlings</h5>
                                </div>
                                <a href="{{route('frontend.nursery_bed')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
