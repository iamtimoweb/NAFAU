@extends('frontend.layouts.master')
@section('pageTitle') trainings on coffee farming @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">What We Do.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Trainings on coffee farming.
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
                        <img src="{{asset('assets/frontend/images/what-we-do/coffee_trainings_lg.jpg')}}" alt=""
                             class="img-fluid w-100">
                        <h3 class="my-4 text-lg">
                            Good agricultural practices, higher yields, better incomes for coffee-producing smallholder
                            farmers
                        </h3>
                        <p>
                            With the above goals we are implementing the Coffee Agronomy Trainings as part of Noah's Ark
                            Farmers Association Program. In this program, our farmers are successively trained through
                            an intensive training program. The program is designed so that they can implement the
                            learned practices directly on their farms. Divided into groups, the farmers are taught
                            agricultural know-how through exchange, observation, practical exercises and experiments. We
                            work at the village level with coaches who train and coach selected farmers as multipliers,
                            so-called contact farmers. Individual farm visits complement the training sessions to
                            motivate the adaptation of practices and to take observed problems in the training program
                        </p>

                        <p>
                            The recommended farming practices are first applied by the farmers themselves on
                            demonstration
                            plots to compare benefits and production costs. To do this, they learn, for example,
                            measures
                            for soil improvement, pest control and effective pruning techniques. The
                            goal is to increase yields by at least 50 percent. In addition, the farmers receive business
                            training in order to better manage their small agricultural businesses. An equally large
                            group
                            of
                            farmers will be trained in a parallel project by TechnoServe.
                        </p>
                        <p>
                            Uganda plays an important role worldwide, especially in Robusta production. However, many of
                            the
                            approximately 1.7 million smallholder farmers in the country still live in poverty. The
                            results
                            of this program of NAFAU will be evaluated with the aim of learning how the situation of
                            smallholders can be most effectively improved. Other focal points of work are climate
                            change,
                            the promotion of young people and a gender approach aimed at strengthening families.
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
                            <div class="what_we_do_item mb-3 mb-sm-0"
                                 style="background: url('{{asset('assets/frontend/images/what-we-do/demo.jpg')}}')">
                                <div class="what_we_do_item__title">
                                    <h5>Coffee demonstration gardens</h5>
                                </div>
                                <a href="{{route('frontend.coffee_demo_garden')}}">Read More</a>
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
