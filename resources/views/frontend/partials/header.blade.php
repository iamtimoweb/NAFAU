<header id="header">
    <!-- Header Top Start -->
    <div class="header-top  py-2 pt-2 pb-1 py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- social icons -->
                <div class=" col-md-6 text-center text-md-left">
                    <span>Connect With Us:</span>
                    <ul class="list-inline d-inline-block">
                        <li class="list-inline-item">
                            <a class="d-inline-block p-2"
                               href="@if($siteInfo['facebook']){{$siteInfo['facebook']}}@else javascript:void(0) @endif">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="d-inline-block p-2"
                               href="@if($siteInfo['twitter']){{$siteInfo['twitter']}}@else javascript:void(0) @endif">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="d-inline-block p-2"
                               href="@if($siteInfo['linkedin']){{$siteInfo['linkedin']}}@else javascript:void(0) @endif">
                                <i class="ti-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- mail and phone -->
                <div class=" col-md-6 text-md-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item mx-0 border-right border-secondary">
                            <a class="text-primary d-inline-block px-lg-3 px-2" href="mailto:info@bexar.com">
                                Email Us:
                                <span>{{$siteInfo['email']}}</span>
                            </a>
                        </li>
                        <li class="list-inline-item mx-0">
                            <a class="text-primary d-inline-block px-lg-3 px-2"
                               href="callto:1234565523">
                                Call Us Now:
                                <span>+256{{Str::substr($siteInfo['contact_no'],1)}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom -->
    <div class="header-bottom header-sticky">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="header-logo col align-self-center">
                    <a class="logo" href="{{route('frontend.welcome')}}">
                        <img src="{{asset('assets/frontend/images/logo.png')}}" alt="Image">
                    </a>
                </div>
                <!-- Main Menu -->
                <div id="main-menu" class="main-menu col-auto d-none d-lg-block">
                    <nav>
                        <ul>
                            <li class="{{Request::segment(1) == ""?"active":""}}">
                                <a href="{{route('frontend.welcome')}}">Home</a>
                            </li>
                            <li class="nav-item {{Request::segment(1) == "about"?"active":""}}">
                                <a href="{{route('frontend.about')}}">About Us</a>
                            </li>
                            <li class="{{ in_array(Request::segment(1), [ 'what-we-do', 'strategy-2021-2025'])?"active":"" }}">
                                <a href="{{route('frontend.work')}}">What We Do</a>
                            </li>
                            <li class="{{Request::segment(1) == "our-coffee"?"active":""}}"><a
                                    href="{{route('frontend.our_coffee')}}">Our Coffee</a></li>
                            <li class="sub-menu {{ in_array(Request::segment(2), [ 'trade_and_marketing', 'farming', 'new-horizon-community-school', 'social_services', 'youth_programes'])?"active":"" }}">
                                <a href="javascript:void(0)">Programs</a>
                                <ul>
                                    <li class="{{Request::segment(2) == "trade_and_marketing"?"active":""}}">
                                        <a href="{{route('frontend.trade_and_marketing')}}">
                                            Trade & Marketing
                                        </a>
                                    </li>
                                    <li class="{{Request::segment(2) == "new-horizon-community-school"?"active":""}}">
                                        <a href="{{route('frontend.education')}}">New Horizon Community School</a>
                                    </li>
                                    <li class="{{Request::segment(2) == "farming"?"active":""}}">
                                        <a href="{{route('frontend.farming')}}">Farming</a>
                                    </li>

                                    <li class="{{Request::segment(2) == "youth_programes"?"active":""}}"><a
                                            href="{{route('frontend.youth_programes')}}">
                                            Youth Programs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu {{ in_array(Request::segment(2), [ 'nafau_clinic', 'malnutrition_program'])?"active":"" }}">
                                <a href="javascript:void(0)">Clinic</a>
                                <ul>
                                    <li class="{{Request::segment(2) == "nafau_clinic"?"active":""}}">
                                        <a href="{{route('frontend.nafau_clinic')}}">
                                            Our farmers Clinic
                                        </a>
                                    </li>
                                    <li class="{{Request::segment(2) == "malnutrition_program"?"active":""}}">
                                        <a href="{{route('frontend.malnutrition_program')}}">
                                            Malnutrition
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) == "compaigns"?"active":""}}">
                                <a href="{{route('frontend.compaigns')}}">Compaigns</a>
                            </li>
                            <li class="{{ Request::segment(1) == "contact"?"active":""}}">
                                <a href="{{route('frontend.contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu col-12 d-lg-none"></div>
            </div>
        </div>
    </div>
    <!-- End of Header Bottom-->
</header>
