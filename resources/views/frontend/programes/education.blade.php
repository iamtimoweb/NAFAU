@extends('frontend.layouts.master')
@section('pageTitle') education @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/frontend/plugins/css/flaticon.css')}}">
@endsection
@section('pageContent')
    <section class="page-title"
             style="background-image: url({{asset('assets/frontend/images/page-titles/education_bg.jpg')}});">
        <div class="container">
            <div class="row no-gutters page-title-content align-items-center justify-content-center">
                <div class="col-md-9 text-center">
                    <h3 class="mb-2 bread">New Horizon Community School</h3>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('frontend.welcome')}}">
                                Home
                                <i class="ti-angle-right"></i>
                            </a>
                        </span>
                        <span>
                            Education
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="education py-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4">
                    <div class="media d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Certified Teachers</h3>
                            <p>
                                All our teachers are qualified and knowlegeable enough to teach our students
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4">
                    <div class="media d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Regular Classes</h3>
                            <p>
                                We follow the Uganda National Curriculum plus extra activities, five days a week
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4">
                    <div class="media d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-education"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Sufficient Classrooms</h3>
                            <p>
                                We have sufficient classrooms to alleviate overcrowding and cut class sizes creating
                                suitable spaces to learn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4">
                    <div class="media d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-kids"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Sports Facilities</h3>
                            <p>
                                sports and games curriculum is an integral and compulsory part of the education process.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section__education__promo section-sm">
        <div class="container">
            <div class="row">
                <div class="section-title mb-0 text-center col-12">
                    <h1>Education Makes Humanity</h1>
                    <h2>New Horizon Community School</h2>
                    <p>
                        Noah's Ark Farmers Association Uganda in partnership with Noah's Ark Children Ministry
                        Uganda have just started a New Horizon School to provide quality
                        education in the community.

                        All the children at the New Horizon Community School, there parents
                        are farmers and members of the association who are coffee growers. As NAFAU, we collect school dues from the coffee that is brought in from the parents helping them (farmers) not to feel the burden of paying school dues at once.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section__school__gallery py-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <a href="{{asset('assets/frontend/images/programmes/education/Gallery/picture_1.jpg')}}"
                       class="gallery__link image-popup img d-flex align-items-center"
                       style="background-image: url({{asset('assets/frontend/images/programmes/education/Gallery/picture_1.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="ti-instagram"></span>
                        </div>
                        h
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{asset('assets/frontend/images/programmes/education/Gallery/picture_2.jpg')}}"
                       class="gallery__link image-popup img d-flex align-items-center"
                       style="background-image: url({{asset('assets/frontend/images/programmes/education/Gallery/picture_2.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="ti-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{asset('assets/frontend/images/programmes/education/Gallery/picture_3.jpg')}}"
                       class="gallery__link image-popup img d-flex align-items-center"
                       style="background-image: url({{asset('assets/frontend/images/programmes/education/Gallery/picture_3.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="ti-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{asset('assets/frontend/images/programmes/education/Gallery/picture_4.jpg')}}"
                       class="gallery__link image-popup img d-flex align-items-center"
                       style="background-image: url({{asset('assets/frontend/images/programmes/education/Gallery/picture_4.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="ti-instagram"></span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="about_education bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 abt-educ-bg-img">
                </div>
                <div class="col-lg-7 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h5 class="section-title-sm">
                        More than 150 children waiting to go to school.
                    </h5>
                    <h3 class="section-title section-title-border-half">
                        Problem
                    </h3>
                    <p class="mb-3">
                        Many families who live hand-to-mouth from the land in the villages around Noah's Ark Farmers
                        Association Uganda (NAFAU), the chances they can pay for their children to go to school are next
                        to nothing.
                        Many of the families are illiterate and have little hope of substantially changing their lives.
                    </p>
                    <p class="mb-3">
                        The rural schools around are poor, most teachers around are poor and many are drunkards due to
                        frustration. The students therefore lack role models. Lack of lunch and poor classrooms make
                        learning very difficult, concentration is minimal and most of the time the students are occupied
                        by domestic chores.
                    </p>

                    <h3 class="section-title section-title-border-half">
                        Solution
                    </h3>
                    <p class="mb-3">
                        We believe that education is the key to breaking this cycle of poverty and believe education
                        will give them a New Horizon. Together with the farmers, Noah's Ark Farmers Association
                        identifies farmers who are its members and offer their children to attend school through
                        provision of coffee.
                    </p>
                    <p>
                        New Horizon has a Nursery School, Primary School operated by Noah's Ark Farmers Association
                        Uganda. We follow the Ugandan curriculum and emphasise other valuable aspects of education
                        such as sports, games and practical skills. Our school considers the growth of a student as a
                        whole rather than only focusing on academic results.
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection
