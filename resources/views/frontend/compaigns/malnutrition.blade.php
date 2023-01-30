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
                            Malnutrition.
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
                            Understanding malnutrition
                        </h3>
                        <h4>What is Malnutrition ?</h4>
                        <p>
                            Malnutrition is often lost in discussions around the subject of hunger, especially in the
                            context of the discourse to "end world hunger," or to "feed the world." These blurred
                            definitions help perpetuate the inadequate response to malnutrition. It is crucial to
                            distinguish between malnutrition and hunger, as malnutrition requires responses that go
                            beyond
                            food aid.
                        </p>
                        <p>
                            Hunger is usually taken to mean a deficiency in caloric intake - any person whose daily diet
                            gives fewer than the defined minimum of 2,100 kcal is considered suffering from hunger, or
                            undernourished. The typical response to hunger is food aid that supplements a person's daily
                            caloric intake
                        </p>
                        <p>
                            Malnutrition however is not merely the result of too little food. It is a pathology caused
                            principally by a lack of essential nutrients. Most food aid is an inadequate response to
                            malnutrition as it either delivers insufficient amounts of essential nutrients or delivers
                            them
                            in a way that they are destroyed by cooking or not taken up properly by the body.
                        </p>
                        <h4>Who is most at risk?</h4>
                        <p>
                            Malnutrition affects first and foremost children under the age of two, but young children
                            less
                            than five years of age, adolescents, pregnant or lactating mothers, the elderly and the
                            chronically ill (including those with HIV/AIDS and TB) are also vulnerable. Children are
                            especially susceptible to growth failure when foods have to be introduced to complement
                            breastfeeding in the first and second years of life. Wasting and other forms of acute
                            malnutrition often appear among children in seasonal cycles, especially during the 'hunger
                            gap'
                            period between harvests.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 my-3">
                                <div class="malnutrition__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/malnutrition/malnutrition__1.jpg')}})">
                                    <div class="malnutrition__item_text">
                                        <p>
                                            Attending to a malnourished child
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-3">
                                <div class="malnutrition__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/malnutrition/malnutrition__2.jpg')}})">
                                    <div class="malnutrition__item_text">
                                        <p>
                                            One of our malnourished patient
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <blockquote>
                            <p>
                                When children suffer from acute malnutrition, their immune systems are so impaired that
                                the
                                risks of mortality are greatly increased. A banal children's disease such as a
                                respiratory
                                infection or gastro-enteritis can very quickly led to complications in a malnourished
                                child
                                and the risks of death are high.
                            </p>
                        </blockquote>
                        <h4>How is malnutrition identified?</h4>
                        <p>
                            Malnutrition is defined in three ways: by a weight for height indicator with a reference
                            population, or mid-upper arm circumference (MUAC), or by the presence of oedema (a bloated
                            appearance to the feet and face).
                        </p>
                        <p>
                            If dietary deficiencies are persistent, children will stop growing and become stunted (low
                            height for one's age). This is referred to as chronic malnutrition. If they experience
                            weight
                            loss or 'wasting' (low weight for one's height), they are described as suffering from acute
                            malnutrition. Both of these presentations of malnutrition may be further classified as
                            moderate
                            or severe.
                        </p>
                        <p>
                            Severe acute malnutrition includes two main clinical forms - severe wasting (called
                            marasmus)
                            and nutritional oedema (known as kwashiorkor). It is the clinical analysis that determines
                            if
                            treatment will be in hospital or with therapeutic RUF at home. NAFAU experience has been
                            that
                            most children do not have complications and can therefore follow therapeutic RUF treatment
                            at
                            home. Severe acute malnutrition has a case fatality rate of up to 21% without effective
                            intervention. But any child with malnutrition is at an increased risk of developing
                            complications leading to severe illness and death.
                        </p>
                        <h4>What are the consequences of malnutrition?</h4>
                        <p>
                            Malnutrition is associated with half of all deaths in children under the age of five each
                            year.
                            The risk of death is particularly high for children with severe acute malnutrition, up to 20
                            times higher than a healthy child.
                        </p>

                        <h3 class="section-title section-title-border-half">Make a donation</h3>
                        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/malnutrition-1" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="600px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>

{{--                        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/water-and-sanitation-1" name="donorbox" allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0" scrolling="no" height="900px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>--}}
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
                                <img src="{{asset('assets/frontend/images/compaigns/education.jpg')}}" alt="">
                                <div class="content">
                                    <h4>
                                        Education
                                    </h4>
                                    <p>
                                        Education is a purposeful activity directed at achieving certain aims, such as transmitting
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
                        <div class="col-lg-4 col-md-6 ">
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
