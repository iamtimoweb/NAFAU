@extends('frontend.layouts.master')
@section('pageTitle') Nafau clinic @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/pharmacy.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Our Farmers Clinic</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            farmers clinic
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__nafau_clinic section-sm">
        <div class="container">
            <div class="row">
                <div class="section-title mb-0 text-center col-12">
                    <h1>Farmers Clinic</h1>
                    <h2>Serving with a Patient's Heart</h2>
                    <p>
                        Our farmers' Clinic provides medical care to all those farmers
                        who are members of Noah's Ark Farmers Association Uganda. It also extend this service to
                        the people that live in the surrounding area. The farmers Clinic is registered as a health
                        center, which means that minor injuries can be dealt with and common diseases like malaria,
                        typhoid and flu can be treated. The clinic has its own delivery room, pharmacy, medical
                        ward, malnutrition unit, Dental unit and laboratory. There is an ambulance on standby for
                        emergencies. The process for treatment, testing and medicine is purposely kept low to allow
                        more people to seek medical attention and care. The medical staff live on the compound and are
                        available 24/7, and include a doctor, nurses, midwives and a lab technician.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__bg__success section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-white text-uppercase">
                        Services Offered
                    </h3>
                    <p class="text-white">
                        Open 8am - 8pm – 24/7 Emergency Services<br>
                        In-patient and out-patient care
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="clinical__departments">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-lg-4 d-flex">
                    <div class="image-depth align-self-stretch"></div>
                </div>
                <div class="col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Doctor's Consultation</h5>
                                    <p>
                                        There is always a doctor for any medical consultation.
                                    </p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Laboratory testing</h5>
                                    <p>
                                        We do all kinds of medical laboratory testings.
                                    </p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Pharmacy</h5>
                                    <p>
                                        Our medical pharmacy is fully packed with drugs for patients
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Immunization</h5>
                                    <p>We carry out immunisation of children of all age</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Nutrition</h5>
                                    <p>We Have Started The Fight Against Malnutrition</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Maternal Health</h5>
                                    <p>
                                        Expectant mothers are provided ante-natal, delivery, post-natal
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Counselling and Testing</h5>
                                    <p>Voluntary counselling and testing of all diseases</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Reproductive Health</h5>
                                    <p>Condition of male and female reproductive systems</p>
                                </div>
                            </div>
                            <div class="department-wrap p-4">
                                <div class="p-2 text-center">
                                    <h5>Emergency Ambulance</h5>
                                    <p>A standby ambulance in case of an emergency</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
