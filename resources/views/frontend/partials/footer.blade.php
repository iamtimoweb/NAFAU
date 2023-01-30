<footer class="section__bg__success">
    <!-- border-bottom-->
    <div class="border-bottom py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <img src="{{asset('assets/frontend/images/logo.jpg')}}" alt="logo" class="mb-30 logo-footer">
                        <p class="text-white mb-30">
                            Noah's Ark Farmers Association Uganda is a produce organisation with members having small
                            scale farms. operates within the areas of kayunga, primarily in villages that make up
                            kangulumira.
                        </p>
                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="@if($siteInfo['facebook']){{$siteInfo['facebook']}}@else javascript:void(0) @endif">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="@if($siteInfo['twitter']){{$siteInfo['twitter']}}@else javascript:void(0) @endif">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="@if($siteInfo['linkedin']){{$siteInfo['linkedin']}}@else javascript:void(0) @endif">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="mb-5 mb-lg-0">
                        <h4 class="text-white text-capitalize mb-4">Programs</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="{{route('frontend.trade_and_marketing')}}">Trade & Marketing</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.education')}}">
                                    NHCS
                                </a>
                            </li>
                            <li>
                                <a href="{{route('frontend.farming')}}">Farming</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.youth_programes')}}">Youth Programs</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- footer links -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="mb-5 mb-lg-0">
                        <h4 class="text-white text-capitalize mb-4">Quick Links</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="{{route('frontend.welcome')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.work')}}">What We Do</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.about')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.compaigns')}}">Campaigns</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.contact')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.privacy-policy')}}">Privacy Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- End footer links -->
                <!-- contact us -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-contact mb-5 mb-lg-0">
                        <h4 class="mb-4 text-capitalize text-white">Get in Touch</h4>
                        <p>
                            <i class="ti-email mr-3"></i>
                            {{$siteInfo['email']}}
                        </p>
                        <p>
                            <i class="ti-mobile mr-3"></i>
                            +256{{Str::substr($siteInfo['contact_no'],1)}}
                        </p>
                        <p>
                            <i class="ti-location-pin mr-3"></i>
                            {{$siteInfo['location']}}
                        </p>
                    </div>
                </div>
                <!-- End Contact us-->
            </div>
        </div>
    </div>
    <!-- End of border bottom-->
    <div class="position-relative py-3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-8 text-center">
                    <p class="text-white">
                        <span class="text-primary">Noah's Ark Farmers Association Uganda</span>
                        &copy; {{date('Y')}} All Right Reserved
                    </p>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="ti-arrow-up"></i>
        </a>
    </div>
</footer>
@includeIf('cookieConsent::index')
