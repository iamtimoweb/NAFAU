@extends('frontend.layouts.master')
@section('pageTitle') contact @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/contact-us.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Contact Us</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Contact Us
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <h4 class="section-title text-capitalize">
                        We'd love to hear from you <br>
                        Give us a call, send us a message?
                    </h4>
                    <ul class="pl-0">
                        <!-- contact items -->
                        <li class="d-flex mb-4">
                            <i class="round-icon mr-3 ti-mobile"></i>
                            <div class="align-self-center font-primary">
                                <p>
                                    +256{{Str::substr($siteInfo['contact_no'],1)}}
                                </p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <i class="round-icon mr-3 ti-email"></i>
                            <div class="align-self-center font-primary">
                                <p>{{$siteInfo['email']}}</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <i class="round-icon mr-3 ti-location-pin"></i>
                            <div class="align-self-center font-primary">
                                <p>{{$siteInfo['location']}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="p-5 rounded shadow">
                        <form id="contactForm" action="{{route('frontend.contact')}}" accept-charset="UTF-8"
                              method="POST" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="mb-3 col-12">
                                    <h3>Drop your message</h3>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="firstnameId" class="sr-only">Firstname</label>
                                    <input type="text" name="firstname" id="firstnameId" class="form-control"
                                           placeholder="First Name...">
                                    <span class="error-text firstname_error"></span>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastnameId" class="sr-only">Lastname</label>
                                    <input type="text" name="lastname" id="lastnameId" class="form-control"
                                           placeholder="Last Name...">
                                    <span class="error-text lastname_error"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="emailId" class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" id="emailId"
                                           placeholder="Email Address">
                                    <span class="error-text email_error"></span>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subjectId" class="sr-only">Subject</label>
                                    <input type="text" name="subject" id="subjectId" class="form-control"
                                           placeholder="Subject..." required>
                                    <span class="error-text subject_error"></span>

                                </div>
                                <div class="form-group col-12">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea class="form-control" name="message" id="messageId"
                                              placeholder="Your Message Here..." cols="30" rows="5"></textarea>
                                    <span class="error-text message_error"></span>

                                </div>

                                <button id="subContact" class="btn btn-primary" type="submit">
                                    Submit Now
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @includeIf('partials.alert_notification')
    </section>
    <section class="map bg-light">
        <!-- Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6127166127685!2d33.027255314318055!3d0.5816723637248931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177c29ad2d9bf401%3A0xa6dd88bcfc1a5cd7!2sNoah&#39;s%20Ark%20Farmers%20Association%20Uganda!5e0!3m2!1sen!2sug!4v1661547876641!5m2!1sen!2sug"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
