@extends('frontend.layouts.master')
@section('pageTitle') trade and marketing @endsection

@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/trade_&_marketing.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">Trade And Marketing</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Trade And Marketing
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_trade__marketing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h5 class="section-title-sm">Coffee Marketing</h5>
                    <h2 class="section-title section-title-border-half">
                       Our Trade and Marketing Strategy
                    </h2>
                    <p>
                        Our coffee marketing strategy communicates an origin brand message to our members. We work with
                        them, perform public relations activities, organize field events and missions or area coffee
                        festivals.
                    </p>
                    <p>
                        Further more we go through the coffee quality assessment and grade coffee samples for quality and taste, evaluate and approve samples for purchase and we do this for long term basis to ensure consistency
                    </p>
                    <p>
                        We develop or evaluate coffee blending practices and sourcing for product mix (origins, blend compositions, component substitutions, coffee for flavoring, certified coffees), as well as, manufacturing procedures related to pre- and post-roast blending
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="trade_marketing__thumbnails">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('assets/frontend/images/marketing/marketing-1.jpg')}}" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="{{asset('assets/frontend/images/marketing/marketing-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('assets/frontend/images/marketing/marketing-3.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="more_abt_trade__marketing bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 bg-image"></div>
                <div class="col-lg-7 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h5 class="section-title-sm">Our Coffee</h5>
                    <h2 class="section-title section-title-border-half">
                        Marketing Services
                    </h2>
                    <p class="mb-3">
                        Learn more about the global market for coffee and how to reach it better. Analysis of public and private industry stakeholders, position, financial performance, market share and outlook
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <ol class="list-numbers mb-0">
                                <li class="mb-3">
                                    <h5>Brand Development</h5>
                                    <p class="text-muted">
                                        Branding plays a crucial role for coffee producers and coffee origin countries
                                        to develop trust among coffee buyers and raise premiums. NAFAU helps SMEs to
                                        communicate brand values authentically to buyer audiences
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h5>Market Research</h5>
                                    <p class="text-muted">
                                        our custom market analysis reports show coffee trends, consumption data and other indicators to identify or evaluate opportunities for trade. Producer analysis reports evaluating production quantities, quality, export markets for trade, and other requested factors
                                    </p>
                                </li>
                                <li class="mb-3">
                                    <h5>Certification Assistance</h5>
                                    <p class="text-muted">
                                        Sustainability standards and certifications, evaluating certification options and guidance to following program criteria for certification brand marks including Utz/Rainforest Alliance, Fair Trade (US and International), certified organic, Kosher and more
                                    </p>
                                </li>
                                <li>
                                    <h5>Consulting</h5>
                                    <p class="text-muted">
                                        Business and brand consulting all types of coffee businesses and qualities of coffee. Advice on producer and commercial strategy for commodity exchange grades through high-value specialty coffee. No bean is left behind
                                    </p>
                                </li>
                                <li>
                                    <h5>Special Events</h5>
                                    <p class="text-muted">
                                        Our association organizes objective and credible regional specialty coffee cupping festivals, with optional price discovery and coffee auction events for regional trade with coffee buyers
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="bg-secondary py-4 text-center text-lg-left">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-9 align-self-center">--}}
{{--                    <h3 class="text-white">--}}
{{--                        Learn More About the Market and How to Reach it Today!</h3>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 text-lg-right">--}}
{{--                    <a href="" class="btn btn-primary btn-sm">Contact Us</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
