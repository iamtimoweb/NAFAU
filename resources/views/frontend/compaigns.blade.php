@extends('frontend.layouts.master')
@section('pageTitle') compaigns @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/compaigns.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Our Compaigns</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Our Compaigns
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__compaigns">
        <div class="container">
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
                                Education is a purposeful activity directed at achieving certain aims, such as
                                transmitting
                                knowledge or fostering skills and character traits.
                            </p>
                            <a href="{{route('frontend.compaigns.education')}}" class="compaign_link">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="compaign__item">
                        <img src="{{asset('assets/frontend/images/compaigns/water__and__sanitation.jpg')}}" alt="">
                        <div class="content">
                            <h4>
                                Water and Sanitation
                            </h4>
                            <p>
                                Access to clean water, basic toilets, and good hygiene practices not only keeps people
                                thriving, but also gives them a healthier start in life.
                            </p>
                            <a href="{{route('frontend.compaigns.water__and__sanitation')}}" class="compaign_link">
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
                                Sustainably produced coffee is grown in a way that conserves nature and provides a good
                                livelihood for the people who grow and process it.
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
    </section>
@endsection
