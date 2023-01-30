@extends('frontend.layouts.master')
@section('pageTitle') Youth Programes @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/youth_programs.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Youth Programes</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Youth Programes
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section__youth_programs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center mb-4 mb-lg-0">
                    <h5 class="section-title-sm">Acknowledging</h5>
                    <h2 class="section-title section-title-border-half">
                        Youth Potentials
                    </h2>
                    <p class="mb-3">
                        In light of the recent global demographic developments, the topic of youth is becoming ever so
                        essential. The world population is now growing by 83 million per year and 60% of Africans are
                        under the age of 15. It’s one of our overarching foundation goals and therefore our
                        responsibility to invest in the future and create prospects for the ones who will soon be our
                        leaders and valuable contributors to society.
                    </p>
                    <p class="mb-3">
                        Currently, we seek to show the upcoming generation of coffee farmers that agriculture can be an
                        attractive and lucrative income-generating activity. We are thereby not focusing on coffee
                        exclusively but on a wide range of agricultural products. In addition, we also invest in young
                        people’s skills so they are in a position to run profitable businesses or transition into other
                        local job opportunities. The main goal is to empower young people in rural communities to
                        improve their livelihoods and to explore their potentials.
                    </p>
                    <p>
                        Step by step, Noah's Ark Farmers Association Uganda, and its partners are building a more proactive, communicating, engaging and
                        empathetic generation of young, bright and talented people around the community who are able to
                        tackle the problems of tomorrow with conviction and purpose.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="youth_pics">
                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <div class="thumb mb-3"
                                     style="background: url('{{asset('assets/frontend/images/youth/youth-1.jpg')}}')">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="thumb mb-3 ml-sm-3"
                                     style="background: url('{{asset('assets/frontend/images/youth/youth-2.jpg')}}')">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="thumb mb-3"
                                     style="background: url('{{asset('assets/frontend/images/youth/youth-3.jpg')}}')">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="thumb ml-sm-3"
                                     style="background: url('{{asset('assets/frontend/images/youth/youth-4.jpg')}}')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our__youth bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="youth__img mb-4 mb-lg-0">
                        <img class="img-fluid" src="{{asset('assets/frontend/images/youth/youth-sorting-3.jpg')}}"
                             alt="">
                        <img class="img-fluid mt-4" src="{{asset('assets/frontend/images/youth/youth-sorting-1.jpg')}}"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="youth__img">
                        <img class="img-fluid" src="{{asset('assets/frontend/images/youth/youth-sorting-2.jpg')}}"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0 order-first order-lg-last">
                    <h3 class="section-title section-title-border-half">Our Youth</h3>
                    <p>
                        Through our youth programs, we are committed to contribute to achieving our youth sustainable
                        development goals by seeking to show them that agriculture can be an attractive and lucrative
                        income-generating activity.
                    </p>
                    <p>
                        Noah's Ark Farmers Association Uganda (NAFAU) being a brain child of Noah's Ark Children
                        Ministry Uganda (NACMU), At the moment the Noah's Ark Children Ministry Uganda (NACMU) runs a
                        children's home and over the years it has impacted the lives of thousands of children and
                        adults. More than 190 children currently call Noah's Ark home.
                    </p>
                    <p>
                        We work with the youth from Noah's Ark Children Ministry and around the community and are
                        actively involved in our specialty coffee farming. Most of our coffee farming projects are
                        managed by the youth, we involve them in every stage of the coffee value chain beginning from
                        coffee planting, weeding, harvesting, processing the coffee, Milling the beans, Roasting the
                        coffee, Grinding the coffee and trade and marketing.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="our_youth__programs">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Our Youth</h5>
                    <h2 class="section-title section-title-border">At Work.</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="youth-item">
                        <!--  Image  -->
                        <img src="{{asset('assets/frontend/images/youth/youth__coffee_planting.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>Planting Coffee</h4>

                            <p>
                                This is done by the youth. The seed is where it all begins. So that's where we begin,
                                too. The coffee plant is the most important technology in the coffee value stream
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="youth-item">
                        <img src="{{asset('assets/frontend/images/youth/youth__coffee_picking.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>picking cofffee</h4>

                            <p>
                                When coffee is ready for harvest, we teach the youth the best methods of harvesting, we
                                emphasize that only the red coffee berries should be picked
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="youth-item">
                        <img src="{{asset('assets/frontend/images/youth/youth__drying__coffee.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>Drying Coffee on Turplines</h4>
                            <p>
                                The youth do the job of drying the coffee beans on the turplines, and this is done for a
                                couple of days until it is turned black and with less moisture and ready to be hulled
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="youth-item">
                        <!--  Image  -->
                        <img src="{{asset('assets/frontend/images/youth/youth__hulling_coffee.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>Processing of Coffee</h4>

                            <p>
                                Nafau has setup a factory in kankulumira town where hulling is done, here is where the
                                husks are removed from the coffee, this is all done by the youth
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0">
                    <div class="youth-item">
                        <img src="{{asset('assets/frontend/images/youth/youth__sorting_coffee.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>Sorting Coffee</h4>

                            <p>
                                After the coffee hulling process, still the coffee has to be sorted to remove the bad
                                coffee from the good one which is roasted to make coffee, this is done by the youth
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="youth-item">
                        <img src="{{asset('assets/frontend/images/youth/youth__marketing_coffee.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>Marketing Coffee</h4>
                            <p>
                                Marketing coffee involves a series of events, branding, market research, consultation,
                                organizing objective and credible specialty coffee festivals. This is all done by the
                                youth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
