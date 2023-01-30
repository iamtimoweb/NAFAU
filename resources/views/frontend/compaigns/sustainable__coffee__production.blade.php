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
                            Sustainable Coffee Production.
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
                            Understanding Sustainable Coffee Production
                        </h3>
                        <p>
                            Sustainably produced coffee is grown in a way that conserves nature and provides a good
                            livelihood for the people who grow and process it. Unsustainable coffee production
                            contributes to deforestation, water contamination and the exploitation of workers. In order
                            to maximize profits, effective this year and in the future, Coffee farmers need to work in a
                            way that is. Environmentally Sustainable, Economically Sustainable and Socially sustainable.
                        </p>
                        <p>
                            By doing this, and working in a sustainable way, farmers can continue to generate good
                            yields of high-quality coffee that fetch a good price for many generations to come.
                        </p>
                        <div class="row">

                            <div class="col-md-6 my-4">
                                <div class="sustainable_coffee_production__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/sustainability/sustainablity-1.jpg')}})">
                                    <div class="sustainable_coffee_production__item_text">
                                        <p>
                                            We find an opportunity to teach the farmers to utilize farm organic wastes
                                            and residues commonly found within the farm
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-4">
                                <div class="sustainable_coffee_production__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/sustainability/sustainablity-2.jpg')}})">
                                    <div class="sustainable_coffee_production__item_text">
                                        <p>
                                            Engaging the farmers in a sustainable coffee production
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-4">
                                <div class="sustainable_coffee_production__item"
                                     style="background: url({{asset('assets/frontend/images/compaigns/sustainability/sustainablity-3.jpg')}})">
                                    <div class="sustainable_coffee_production__item_text">
                                        <p>
                                            Visiting some of our farmers to know some of their challenges
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            The project will focus work with members having small scale farms within the areas of
                            kayunga, primarily in the villages that make up kangulumira.
                        </p>

                        <ol class="list-numbers my-4">
                            <li class="mb-4">
                                <h5>Maintain Good soil Fertility</h5>
                                <p class="text-muted">
                                    Through an established farming system of mixed crop species.
                                    -Prevent soil erosion, as well as the deterioration of soil through mechanical
                                    control for example use of terraces, erosion barriers and biological control like
                                    maintaining vegetative cover all year round through intercropping with nitrogen
                                    binding legumes or through Mulching.
                                </p>
                            </li>
                            <li class="mb-4">
                                <h5>Integrated Pest Management System</h5>
                                <p class="text-muted">
                                    Planting varieties of shade trees like Grevillea ssp, Ficus spp, and Cordia spp in
                                    coffee gardens to provide coffee with shade but also to prevent the pests such as
                                    the black twig borers.
                                </p>
                            </li>

                            <li>
                                <h5>Water usage and wastewater management</h5>
                                <p class="text-muted">
                                    Support farmers to collect run-off water in trenches for soil moisture and
                                    retention. Reduce the volume of water used in the wet processing of coffee via the
                                    application of efficient technologies and recycling of water. Take active steps not
                                    to pollute local water sources - they belong to everyone.
                                </p>
                            </li>
                            <li>
                                <h5>Water management</h5>
                                <p class="text-muted">
                                    It's important to separate organic and inorganic waste- Organic waste can be used to
                                    make compost and improve the health of the farmer's soil.
                                </p>
                            </li>
                            <li>
                                <h5>Climate change adaptation and prevention</h5>
                                <p class="text-muted">
                                    Climate change is the change of the Earth's ecosystems due to an increase in the
                                    global temperature. The effects of climate change include prolonged droughts,
                                    hailstorms, landslides, floods, thunderstorms and unreliable rainfall which can
                                    disrupt agriculture productivity. Good Agricultural Practices will be adopted. These
                                    include planting shade trees- (1000 trees already planted), mulching, irrigation,
                                    use of manure and soil erosion control and use of cover crops.
                                </p>
                            </li>
                            <li>
                                <h5>Harvesting, processing and Good Coffee storage.</h5>
                                <p class="text-muted">
                                    Coffee should be harvested well, Processed well and well stored to avoid
                                    contamination from the bare grounds or other foreign materials that compromise the
                                    quality coffee.
                                </p>
                            </li>
                            <li>
                                <h5>Selling Coffee.</h5>
                                <p class="text-muted">
                                    With a good relationship with the farmer's cooperatives/associations, farmers can
                                    link to support services that help farmers bargain collectively to achieve a good
                                    price.
                                </p>
                            </li>
                            <li>
                                <h5>Financial Sustainability.</h5>
                                <p class="text-muted">
                                    Where possible farmers will engage in multiple income-generating activities on or
                                    off-farm under this project. when farmers have different income sources it helps
                                    them to build resilience and they are more likely not to be forced to sell their
                                    coffee at the farm gate at harvest time for immediate cash. They will wait and sell
                                    their coffee in bulk at a higher price. More farmers will join NAFAU (Noah's Ark
                                    Farmers Association Uganda to save money and take out loans at favorable at fair
                                    terms.
                                </p>
                            </li>
                            <li>
                                <h5>Working Conditions of Coffee farmers.</h5>
                                <p class="text-muted">
                                    Farm workers should be treated equally and fairly with no discrimination against
                                    gender or disability. All workers are important for the farm to grow and should be
                                    treated with respect. Reasonable working conditions such s clean drinking water,
                                    toilets and protective equipment shall be our focus in improving their condition
                                    through research and advocacy. The project will strongly reject all forms of child
                                    labor.
                                </p>
                            </li>
                            <li>
                                <h5>Training Farmers.</h5>
                                <p class="text-muted">
                                    Both staff and farmers will be trained in sustainable production practices and good
                                    agricultural practices.

                                </p>
                            </li>
                        </ol>
                        <h3 class="section-title section-title-border-half">Make a donation</h3>
                        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script>
                        <iframe src="https://donorbox.org/embed/sustainable-coffee-production" name="donorbox"
                                allowpaymentrequest="allowpaymentrequest" seamless="seamless" frameborder="0"
                                scrolling="no" height="600px" width="100%"
                                style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>

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
                                <img src="{{asset('assets/frontend/images/compaigns/water__and__sanitation/water__and__sanitation-2.jpg')}}" alt="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
