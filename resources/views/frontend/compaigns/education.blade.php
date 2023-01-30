@extends('frontend.layouts.master')
@section('pageTitle') compaigns @endsection

@section('pageContent')
    <section class="section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="section-title-sm text-white-50">Compaigns.</h5>
                        <h2 class="section-title section-title-border text-white">
                            Education.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section__our-compaign-details">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="compaign-details">
                        <h3 class="section-title section-title-border-half">
                            Understanding Education
                        </h3>
                        <h4>What is Education?</h4>
                        <p>
                            Education is a purposeful activity directed at achieving certain aims, such as transmitting
                            knowledge or fostering skills and character traits. These aims may include the development
                            of understanding, rationality, kindness, and honesty.
                        </p>
                        <h4>
                            Why is education important and how does it affect one’s future?
                        </h4>
                        <p>
                            The ultimate goal of education is to help an individual navigate life and contribute to
                            society once they become older. There are various types of education but typically,
                            traditional schooling dictates the way one’s education success is measured. People who
                            attended school and attained a higher level of education are considered more employable and
                            likely to earn more.
                        </p>
                        <p>
                            Education helps eradicate poverty and hunger, giving people the chance at better lives. This
                            is one of the biggest reasons why parents strive to make their kids attend school as long as
                            possible. It is also why nations work toward promoting easier access to education for both
                            children and adults.
                        </p>
                        <h4 class="text-capitalize">Give kids a free education. We Need Your Help. Let's Work
                            together. </h4>
                        <p>
                            More than 350 students from the home and community attend the New Horizon Community School
                            through our sponsorship program. They are provided with a future-proof education based on
                            the Ugandan National Curriculum supplemented with extra activities.
                        </p>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="education__compaign_item"
                                     style="background: url('{{asset('assets/frontend/images/compaigns/education/kids.jpg')}}')">
                                    <div class="education__compaign_item_text">
                                        <p>
                                           Our students from New Horizon Community School
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="education__compaign_item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/education/educ-comp-1.jpg')}})">
                                    <div class="education__compaign_item_text">
                                        <p>
                                            Students having lessons
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="education__compaign_item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/education/educ-comp-2.jpg')}})">
                                    <div class="education__compaign_item_text">
                                        <p>
                                            Extra Activities for our students
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            Many families who live hand-to-mouth from the land in the villages around Noah's Ark Farmers
                            Association Uganda, the chances they can pay for their children to go to school are
                            next to nothing. Many of the families are illiterate and have little hope of substantially
                            changing their lives
                        </p>
                        <p>
                            In order to enable people to help themselves, we pursue the goal that even marginalized
                            children have access to education. Through our New Horizon Community School in kalagala
                            village, we identify farmers who are members of Noah's Ark Farmers Association Uganda and
                            give their children a chance to develop through provision of coffee while at the same
                            time the educational level of entire community is gradually raised.
                        </p>
                        <p>
                            Teachers will be employed to deliver education for vulnerable children living in community.
                            Kids will learn basic reading, writing and maths to ensure they are equipped with the skills
                            needed to participate in the public primary school system and can go on to have the chance
                            to break the cycle of poverty. The teachers will all be trained and hired from within the
                            community, providing a rare opportunity for quality, stable employment.
                        </p>
                        <h3 class="section-title section-title-border-half">Make a donation</h3>
                        <h4>Use of Funds</h4>
                        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/education-72" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="600px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__compaigns bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">More</h5>
                    <h2 class="section-title section-title-border-half">
                        Compaigns
                    </h2>
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
                                        Sustainably produced coffee is grown in a way that conserves nature and provides a good livelihood for the people who grow and process it.
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
            </div>
        </div>
    </section>
@endsection
