@extends('frontend.layouts.master')
@section('pageTitle') about @endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.svg.">
@endsection
@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/about_us.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">About Us</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            About Us
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <h5 class="section-title-sm">Know About</h5>
                    <h2 class="section-title section-title-border-half">Our Philosophy</h2>
                    <p>
                        Noah's Ark Farmers Association Uganda is a nonprofit, membership-based association with members
                        having small scale farms (less than 25 acres each) managed mainly by themselves and their
                        families.
                    </p>
                    <p>
                        Built on foundations of openness, inclusivity, and the power of shared knowledge, we foster a
                        coffee community and support activities that make specialty coffee a thriving, equitable, and a
                        sustainable activity for the entire value chain.
                    </p>
                    <p>
                        The association operate within areas of Kayunga, primarily in the villages that make up
                        Kangulumira, encompassing every element of the coffee value chain. Members are organized in
                        groups of up to 100 persons at village level with the focus farm commodity being coffee. Our
                        membership spans areas of Kayunga, primarily in the villages that make up Kangulumira,
                        encompassing every element of the coffee value chain.
                    </p>
                    <p>
                        NAFAU acts as a unifying force within the specialty coffee industry and works to make coffee
                        better by raising standards of its members through a collaborative and progressive approach.
                        Dedicated to building an industry that is fair, sustainable, and nurturing for all.
                    </p>
                </div>
                <!-- philosophy image -->
                <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-5">
                    <video id="player" class="w-100" playsinline controls
                           data-poster="{{asset('assets/frontend/videos/snapshot2.jpg')}}">
                        <source src="{{asset('assets/frontend/videos/papa2.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="section_mission_vision bg-success">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 content-item">
                    <span>01</span>
                    <h4 class="text-white-50">Our Purpose</h4>
                    <p class="text-white">
                        To foster our members to support activities that make specialty coffee a
                        thriving, equitable, and sustainable activity for the entire value chain.
                    </p>
                </div>
                <div class="col-md-4 content-item">
                    <span>02</span>
                    <h4 class="text-white-50">Our Mission</h4>
                    <p class="text-white">
                        To improve the quality and quantity in yields at farm level thereby empowering farming
                        communities to sustainable development
                    </p>
                </div>
                <div class="col-md-4 content-item">
                    <span>03</span>
                    <h4 class="text-white-50">Our Vision</h4>
                    <p class="text-white">
                        Dynamic, prosperous and sustainable farming that ensures food security and sovereignty,
                        economic, social and cultural development of the community, built around a well-organized
                        community networks and efficient farming as family business”.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_our_history">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title-sm">History of</h5>
                <h2 class="section-title section-title-border">
                    Noah's Ark Farmers Association Uganda
                </h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <img src="{{asset('assets/frontend/images/history/humble_begining.jpeg')}}" alt=""
                             class="rounded-circle img-fluid">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2018</h4>
                            <h4 class="subheading">Our Humble Beginning</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Noah’s Ark Farmers’ Association Uganda (NAFAU) is a brainchild of Noah’s ark children’s
                                ministry
                                Uganda (NACMU) as an intervention to uplift the lives of rural families especially women
                                and
                                children – who are the most vulnerable using the available occupations.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img src="{{asset('assets/frontend/images/history/humble_begining.jpeg')}}" alt=""
                             class="rounded-circle img-fluid">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>August 2019 - 2020</h4>
                            <h4 class="subheading">NAFAU is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Noah’s Ark Children Ministry Uganda (NACMU) founded by Piet and Pita Buitendijk as a
                                non-denominational Christian organization originally as a home for abandoned, abused and
                                unwanted children, resolved to support the rural farming communities in Uganda by
                                organizing the famers into groups and helping them to form farmer associations.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image">
                        <img src="{{asset('assets/frontend/images/history/humble_begining.jpeg')}}" alt=""
                             class="rounded-circle img-fluid">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>August 2021</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                NACMU has been in touch with the communities in Kayunga through the child and family
                                protection units (CFPU) of the police and probation office assisting in children
                                abandonment, domestic violence and child abuse cases for many years.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img src="{{asset('assets/frontend/images/history/humble_begining.jpeg')}}" alt=""
                             class="rounded-circle img-fluid">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>February 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                NACMU has embarked on a new school construction project in Kalagala village within their
                                organic farm that will enable children from low income earning families in the community
                                attain quality education.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br/>
                            Of Our
                            <br/>
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
