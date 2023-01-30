@extends('frontend.layouts.master')
@section('pageTitle') coffee processing @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">What We DO.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Coffee Processing.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__coffee_processing__promo section-sm bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="section-title mb-0 text-center col-12">
                    <h1>The coffee you enjoy</h1>
                    <h4>
                        Has taken a long journey to arrive in your cup.
                    </h4>
                </div>
                <div class="col-md-6 text-center mt-4">
                    <img src="{{asset('assets/frontend/images/what-we-do/Coffee-processing-steps-from-fresh-cherries-to-coffee-beans-in-Cameroon-Ia-Ib-II.ppm.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section__our-compaign-details">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="compaign-details">
                        <h4 class="section-title section-title-border-half">Planting</h4>
                        <p>
                            Coffee seeds are generally planted in large beds in shaded nurseries. The seedlings will
                            be watered frequently and shaded from bright sunlight until they are hearty enough to be
                            permanently planted. Planting often takes place during the wet season, so that the soil
                            remains moist while the roots become firmly established.
                        </p>
                        <h4 class="section-title section-title-border-half">Harvesting the Cherries</h4>
                        <p>
                            There is typically one major harvest a year. The crop is picked by hand and all of the
                            cherries are stripped off of the branch at one time. Only the ripe cherries are
                            harvested, and they are picked individually by hand. Pickers rotate among the trees
                            every eight to 10 days, choosing only the cherries which are at the peak of ripeness.
                        </p>
                        <h4 class="section-title section-title-border-half">Processing the cherries</h4>
                        <p>
                            We use the Dry Method which is the age-old method
                            of processing coffee. The freshly picked cherries are simply spread out on huge surfaces
                            to dry in the sun between 5 and 7 days. In order to prevent the cherries from spoiling, they are raked and
                            turned throughout the day, then covered at night or during rain to prevent them from
                            getting wet. Depending on the weather, this process might continue for several days for
                            each batch of coffee until the moisture content of the cherries drops to 12%.
                        </p>
                        <h4 class="section-title section-title-border-half">Milling the Beans</h4>
                        <p>
                            Typically, the bean size is represented on a scale of 10 to 20. The number represents the
                            size
                            of a round hole's diameter in terms of 1/64's of an inch. A number 10 bean would be the
                            approximate size of a hole in a diameter of 10/64 of an inch, and a number 15 bean, 15/64 of
                            an
                            inch.
                        </p>
                        <p>
                            Finally, defective beans are removed either by hand or by machinery. Beans that are
                            unsatisfactory due to deficiencies (unacceptable size or color, over-fermented beans,
                            insect-damaged, unhulled) are removed. This process is done both by machine and by hand,
                            ensuring that only the finest quality coffee beans are got.
                        </p>
                        <h4 class="section-title section-title-border-half">Roasting the Coffee</h4>
                        <p>
                            Most roasting machines maintain a temperature of about 550
                            degrees Fahrenheit. The beans are kept moving throughout the entire process to keep them
                            from burning.
                        </p>
                        <p>
                            When they reach an internal temperature of about 400 degrees Fahrenheit, they begin to
                            turn brown and the caffeol, a fragrant oil locked inside the beans, begins to emerge.
                            This process called pyrolysis is at the heart of roasting — it produces the flavor and
                            aroma of the coffee we drink.
                        </p>
                        <h4 class="section-title section-title-border-half">Grinding Coffee</h4>
                        <p>
                            The length of time the grounds will be in contact with water determines the ideal grade
                            of grind Generally, the finer the grind, the more quickly the coffee should be prepared.
                            That’s why coffee ground for an espresso machine is much finer than coffee brewed in a
                            drip system. We take a moment to examine the beans and smell their aroma — in fact, the
                            scent of coffee alone has been shown to have energizing effects on the brain.
                        </p>

                        <h4 class="section-title section-title-border-half">Tasting the Coffee</h4>
                        <p>
                            First, the taster — usually called the cupper — evaluates the beans for their overall
                            visual quality. The beans are then roasted in a small laboratory roaster, immediately
                            ground and infused in boiling water with carefully-controlled temperature. The cupper
                            noses the brew to experience its aroma, an essential step in judging the coffee's
                            quality.
                        </p>
                        <p>
                            After letting the coffee rest for several minutes, the cupper breaks the crust by pushing
                            aside
                            the grounds at the top of the cup. Again, the coffee is nosed before the tasting begins.
                        </p>
                        <p>
                            To taste the coffee, the cupper slurps a spoonful with a quick inhalation. The objective is
                            to
                            spray the coffee evenly over the cupper's taste buds, and then weigh it on the tongue before
                            spitting it out.
                        </p>
                        <p>
                            Samples from a variety of batches and different beans are tasted daily. Coffees are not only
                            analyzed to determine their characteristics and flaws, but also for the purpose of blending
                            different beans or creating the proper roast. An expert cupper can taste hundreds of samples
                            of
                            coffee a day and still taste the subtle differences between them.
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
