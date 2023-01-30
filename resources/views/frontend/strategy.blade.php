@extends('frontend.layouts.master')
@section('pageTitle') compaigns @endsection

@section('pageContent')
    <section class="section__strategy-download section__bg__success">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="strategy__pdf_thumb" src="{{asset('assets/frontend/images/strategy-lg.jpg')}}"
                         alt="chart">
                </div>
                <div class="col-lg-8 align-self-lg-center">
                    <h5 class="section-title-sm text-white-50">Strategy 2021-2025</h5>
                    <h2 class="section-title section-title-border-half text-white">
                        sustainable food and agriculture
                    </h2>

                    <a href="{{route('frontend.download__strategy__pdf')}}"
                       class="btn btn-primary btn-sm text-uppercase">
                        <i class="ti-download"></i>
                        English PDF
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section__our-compaign-details">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="compaign-details">
                        <p>
                            In 2021, NAFAU launched a strategy planning process to define our 2021-2025 strategy, which
                            began with an inclusive and participatory approach with its national networks through
                            individual
                            interviews with the Farmers Organisation (FOs), through work shops, with the participation
                            of
                            several stake holders and NAFAU partners. The five-year strategy (2021-2025) is a strategic
                            vision which proposes a coordinated approach of NAFAU interventions for sustainable food and
                            agriculture, which meet the needs and expectations of FOs and the agriculture sector in
                            Uganda.
                            The result of this reflection constitute entry points for an advocacy towards transnational
                            policies, strategies and programs aiming to the transition to an agriculture combining high
                            productivity, economic viability and respect for the environment, while being based on
                            inclusion
                            and social justice.
                        </p>
                        <h4>Executive summary</h4>
                        <p>
                            The five-year strategic plan of Noah’s ark farmers association Uganda. Nafau was formed or
                            started through a participatory and inclusive process which included the community members
                            and farmers.
                        </p>
                        <p>
                            The process included several key steps: individual consultations of local leader’s,
                            villagers,
                            community workshops, agricultural sectors, key stakeholders and Nafau partner.
                        </p>
                        <p>
                            Agriculture is the main economic activity in most rural areas of Uganda and East Africa. It
                            contributes to about 24% to GDP, 26% comes from the industry and 43% comes from service
                            sector it all provides employment over 60% of the total population in the country. Woman
                            play and provide the most in agriculture production.
                        </p>
                        <p>
                            Vast Majority of 70% are small scale farmers in Uganda and are often more productive at
                            substance level due to poor productivity and limited access of market.
                        </p>
                        <p>
                            In 2020 this already challenging environment saw the advent two key crisis: Covid-19 and
                            locust invasion in Africa and Uganda. The impact is a further decrease in production,
                            limited
                            access to farming inputs, poor prizes, loss of jobs in agriculture and restricted trade
                        </p>
                        <p>
                            NAFAU Members also analyzed that crisis also provide opportunity. The moment is ripe to
                            truly increase trade, notably with free trade area coming into effects. It is imperative for
                            NAFAU to build on its established office in Kayunga (Kangulumira), its permanent staffs,
                            increasing reputation and notoriety as voice for farmers and access to agricultural forums
                            to
                            advocate and obtain gains for farmers.
                        </p>
                        <p>
                            Members re-emphasized that the foundation of the organization is to foster farming as a
                            family business and pillar for economic, social and Cultural development. The five year
                            strategy was built on the foundation.
                        </p>
                        <p>
                            To develop its strategy, Nafau first refined its theory of change. The key element necessary
                            for
                            transforming Farmers in Uganda. Strengthening farmers as entrepreneurs to run farms that
                            ensures
                            Economic, social and cultural
                            development. Providing a conducive environment for agriculture investment, production,
                            marketing
                            and Knowledge management. The role is their for to work on these two key levers at the
                            national
                            and community levels to ensure that all farmers are impacted
                        </p>
                        <h4>Our objectives</h4>
                        <p>
                            We will achieve this aim through an agricultural R&D program that advances three
                            interconnected
                            objectives:
                        </p>
                        <ul>
                            <li class="paragraph mb-2">
                                Make the specialty coffee industry more sustainable with an agenda focused on
                                partnerships, education, research, and advocacy.
                            </li>
                            <li class="paragraph mb-2">
                                Create opportunities for professional engagement and individual growth through our
                                network and programs.
                            </li>
                            <li class="paragraph mb-2">
                                Expand our area of operation and enhance the experience of our stakeholders by working with
                                local communities.
                            </li>
                            <li class="paragraph mb-2">
                                Deliver outstanding service to members of the Noah's Ark Farmers Association Uganda
                                in
                                everything we do.
                            </li>
                        </ul>

                        <h4>Our Approach</h4>
                        <p class="mb-3">
                            In the planning process, the current trends in Farming were presented with a specific look
                            at
                            the key trends in each region and villages. Below are the key aspects highlighted by
                            NAFAU members and used to determine the organization’s priorities for the next five years.
                        </p>
                        <ol class="list-numbers mb-0">
                            <li class="mb-4">
                                <h5>Trade in agricultural products</h5>
                                <p class="text-muted">
                                    According to a study agricultural products include food crops (such as plantations,
                                    cassava,
                                    sweet-potatoes, millet, sorghum, beans and groundnuts and exports crops coffee,
                                    cotton,
                                    tea
                                    and tobacco. Imports of agricultural products being higher than exports, Uganda has
                                    a
                                    trade
                                    deficit in the sector, suggesting there are opportunities for increased production
                                    as
                                    well as
                                    for increased trade.

                                </p>
                            </li>
                            <li class="mb-4">
                                <h5>Food and Security</h5>
                                <p class="text-muted">
                                    In a report published by FAO in March 2020, 34 African countries need Economic
                                    growth
                                    and food assistance due to a deficit in food production and supply as well as a
                                    limited
                                    market access for distribution. Once again these challenges represent opportunities
                                    for
                                    the development of domestic production and consumption.
                                </p>
                            </li>
                            <li class="mb-4">
                                <h5>The agro-technology</h5>
                                <p class="text-muted">
                                    The use of ICTs in the agricultural sector has several proven advantages for
                                    producers
                                    such as access to information on climate conditions and market conditions, better
                                    organisations of agricultural tasks, increase in efficiency, Improved crop
                                    management
                                    thanks to technological developments such as aerial imaging, weather forecasting,
                                    soil
                                    sensors, etc
                                </p>
                            </li>
                            <li>
                                <h5> Climate Change</h5>
                                <p class="text-muted">
                                    For years, climate change has been significantly reducing agricultural
                                    productivity and thus aggravating its challenges with food security for
                                    a rapidly growing population. Climate change repercussions are direct
                                    not only on production, but on key aspects of the physical
                                    environment. For example, the river basins around which most
                                    agricultural activities are concentrated have deteriorated considerably
                                    in recent years: Nile (-42%)
                                </p>
                                <p class="text-muted">
                                    These changing basic conditions require farmers not only to adapt for
                                    production, but also for land tenure and land use. Poor management
                                    of which can lead to full-blown conflict, creating further
                                    destabilization for farmers.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
