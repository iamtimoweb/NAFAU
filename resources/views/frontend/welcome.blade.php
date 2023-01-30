@extends('frontend.layouts.master')
@section('pageTitle') welcome @endsection

@section('pageContent')
    <!--Slider-->
    <section class="slider__area">
        <div class="slider-owl owl-theme owl-carousel">
            @foreach($sliders as $slider)
                <div class="single-slide item" style="background-image: url({{$slider->imagePath}})">
                    <div class="slider-content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content text-center">
                                            <h1>{{$slider->title}}</h1>
                                            <p>
                                                {{$slider->txt}}
                                            </p>
                                            <a class="btn btn-primary" href="{{route('frontend.about')}}">
                                                Learn more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!----End of slider-->

    <section class="Intro__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-50">
                    <h5 class="section-title-sm">About Us</h5>
                    <h2 class="section-title section-title-border-half">
                        Who We Are?
                    </h2>
                    <p class="mb-4">
                        Noah's Ark Farmers Association Uganda is an umbrella coffee farmers association founded in 2020
                        as a brain child of <a href="https://www.nacmu.org/" target="_blank" class="nacmu__link">Noah's
                            Ark Children
                            Ministry Uganda</a> operating within areas of Kayunga, primarily in the villages that make
                        up Kangulumira. NAFAU has grown and evolved as a vibrant private sector led farmer organization
                        formed to serve and position farmers well in the liberalized coffee value chain in Uganda.
                    </p>
                    <a href="{{route('frontend.about')}}" class="btn btn-primary">Read More</a>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid w-100" src="{{asset('assets/frontend/images/coffee-beans-sack.jpg')}}"
                         alt="chart">
                </div>
            </div>
        </div>
    </section>

    <!--what_we_do-->
    <section class="what_we_do section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm text-white-50">What we do.</h5>
                    <h2 class="section-title section-title-border text-white">
                        Farming as a family business
                    </h2>
                </div>
                <!-- what we do item -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="what_we_do_thumb mb-4" src="{{asset('assets/frontend/images/innovation.jpg
')}}"
                         alt="">
                    <div class="text-center">
                        <h2 class="text-white-50">Agricultural Innovation</h2>
                        <p class="what_we_do_text  text-white">
                            We drive research to preserve origin diversity and secure future supply.
                        </p>
                    </div>
                </div>
                <!-- what we do item -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="what_we_do_thumb mb-4" src="{{asset('assets/frontend/images/roasting.jpg')}}"
                         alt="">
                    <div class="text-center">
                        <h2 class="text-white-50">Farmers to Roasters</h2>
                        <p class="what_we_do_text text-white">
                            Our inclusive approach ensures innovations deliver shared value for farmers, origins, and
                            industry.
                        </p>
                    </div>
                </div>
                <!-- what we do item -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="what_we_do_thumb mb-4" src="{{asset('assets/frontend/images/sustainable.jpg')}}"
                         alt="">
                    <div class="text-center text-white">
                        <h2 class="text-white-50">A Sustainable Sector</h2>
                        <p class="what_we_do_text text-white">
                            Our members are committed to the long term sustainability of the coffee, its people and
                            communities.
                        </p>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <a href="{{route('frontend.work')}}" class="btn btn-primary">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End what_we_do-->
    <section class="section_challenges">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">Our Challenges</h5>
                    <h2 class="section-title section-title-border-half">
                        Challenges today, <br> opportunities tomorrow.
                    </h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-40">
                                Innovation solves critical challenges and creates new and unimagined opportunities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="challenges__item">
                        <!--  Image  -->
                        <img src="{{asset('assets/frontend/images/small_holder_farmers.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4> 60% of global coffee supply comes from smallholder farmers.</h4>
                            <p>
                                Farmers who have access to tools, technology, and knowledge are more likely to be
                                profitable and to stick with farming.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="challenges__item">
                        <!--  Image  -->
                        <img src="{{asset('assets/frontend/images/coffee.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>5 countries produce 72% of the world’s coffee.</h4>
                            <p>
                                The world’s coffee supply is consolidating. Thriving origin diversity brings the
                                economic benefits of coffee to farmers in more countries and gives roasters choices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="challenges__item">
                        <!--  Image  -->
                        <img src="{{asset('assets/frontend/images/estimated.jpg')}}" alt="Image">
                        <!--  Content  -->
                        <div class="content">
                            <h4>We need 25% more coffee by 2030</h4>
                            <p>
                                Estimated demand for coffee is steadily increasing while climate change puts more
                                pressure on landscapes. More productive varieties can help us meet the challenge.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Why choose us-->
    <section class="core-values-section bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 core-values-bg-img">
                </div>
                <div
                    class="col-lg-7 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h5 class="section-title-sm">Best Reasons</h5>
                    <h2 class="section-title section-title-border-half">Our Core Values</h2>
                    <p class="mb-3">
                        We are a community association which falls under the Ministry of Agriculture, Animal Industry
                        and
                        Fisheries, we aid farmers to improve quality, quantity, milling,
                        warehousing, and marketing the farmer's coffee.
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <ol class="list-numbers mb-0">
                                <li class="mb-3">
                                    <h5>Farmer Centrism</h5>
                                    <p class="text-muted">
                                        The farmer always comes first. We engage the farmers from a personal level to
                                        ensure the best service and value for their coffee produce.
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h5>Transparency</h5>
                                    <p class="text-muted">
                                        We inspire trust through transparent communication and acknowledgement of
                                        accountability, and improve performance through aspiration, self-monitoring and
                                        farmer engagement.
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h5>Integrity</h5>
                                    <p class="text-muted">
                                        We demonstrate integrity of business practice and nonprofit governance. We
                                        comply with local regulatory requirements and act with unyielding dedication to
                                        our self-defined commitments.
                                    </p>
                                </li>

                                <li>
                                    <h5>Sustainability</h5>
                                    <p class="text-muted">
                                        We sustainably grow coffee in a way that conserves nature and
                                        provides good livelihood for the people who grow and produce it.
                                    </p>
                                </li>
                                <li>
                                    <h5>Professionalism</h5>
                                    <p class="text-muted">
                                        We create, produce, and support discrimination-free and harassment-free safe
                                        spaces for personal and professional collaboration, growth, and learning. We
                                        acknowledge that every member has a voice
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="what-members-say">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm text-white-50">Our Testimonial</h5>
                    <h2 class="section-title section-title-border text-white-50"> What Farmers Say </h2>
                </div>
                <div class="col-10 mx-auto">
                    <div class="testimonial-slider">
                    @foreach($testimonials as $testimonial)
                        <!-- slider-item -->
                            <div class="text-center">
                                <img class="img-fluid box-shadow rounded-circle mb-4 d-inline-block"
                                     src="{{$testimonial->imagePath}}"
                                     alt="client">
                                <div class="bg-quote text-center pt-md-4"
                                     data-dot-image="images/testimonial/client-2.jpg">
                                    <p class="font-italic mb-4 text-white-50">
                                        {{$testimonial->testimony}}
                                    </p>
                                    <h4 class="text-white">{{$testimonial->member}}</h4>
                                    <span class="text-primary">Member</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial-->
    <section class="section__our_impact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Work of Excellence</h5>
                    <h2 class="section-title section-title-border">Our Impact.</h2>
                </div>
                <div class="col-12">
                    <div class="our-impact__btn-group">
                        <label class="active" for="all">
                            <input type="radio" name="our-impact__filter" id="all" value="all" checked="checked">
                            Show All
                        </label>
                        <label for="trainings">
                            <input type="radio" name="our-impact__filter" id="trainings" value="trainings">
                            Our Trainings
                        </label>
                        <label for="education">
                            <input type="radio" name="our-impact__filter" id="education" value="education">
                            Education
                        </label>
                        <label for="social_services">
                            <input type="radio" name="our-impact__filter" id="social_services" value="social_services">
                            Social Services
                        </label>

                        <label for="coffee_demo_garden">
                            <input type="radio" name="our-impact__filter" id="coffee_demo_garden"
                                   value="coffee_demo_garden">Coffee Demo
                            Garden
                        </label>
                        <label for="coffee_processing">
                            <input type="radio" name="our-impact__filter" id="coffee_processing"
                                   value="coffee_processing">
                            Coffee Processing
                        </label>
                        <label for="healthcare">
                            <input type="radio" name="our-impact__filter" id="healthcare" value="healthcare">
                            Healthcare
                        </label>
                    </div>

                    <!-- Impact Item -->
                    <div class="row our-impact__wrapper">
                        <div class="col-1 our-impact__sizer"></div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["trainings"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/trainings-1.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/trainings-1.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Our Trainings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["trainings"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/trainings-2.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/trainings-2.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Our Trainings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["education"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/educ-1.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/educ-1.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Education</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["education"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/educ-2.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/educ-2.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Education</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["social_services"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/social.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/social.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Social Services</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["social_services"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/social-2.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/social-2.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Social Services</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["coffee_demo_garden"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/demo-garden-1.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/demo-garden-1.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Coffee Demo Garden</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["coffee_demo_garden"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/demo-garden-2.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/demo-garden-2.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Coffee Demo Garden</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["coffee_processing"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/cuppings-1.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/cuppings-1.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Coffee Processing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 our-impact__item" data-groups='["coffee_processing"]'>
                            <div class="our-impact__img-container">
                                <a class="our-impact__gallery-popup"
                                   href="{{asset('assets/frontend/images/our-impact/cuppings-2.jpg')}}">
                                    <img class="img-fluid"
                                         src="{{asset('assets/frontend/images/our-impact/cuppings-2.jpg')}}"
                                         alt="img">
                                    <span class="gallery-icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </a>
                                <div class="our-impact__info">
                                    <div class="our-impact__info_content">
                                        <p class="our-impact-cat">Coffee Processing</p>
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
