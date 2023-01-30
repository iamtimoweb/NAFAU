@extends('frontend.layouts.master')
@section('pageTitle') programes @endsection

@section('pageContent')
    <section class="section_all_programs bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title section-title-border-half">Programes</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                We drive research to dramatically improve coffee productivity, coffee quality, climate
                                resilience, and farmer livelihoods.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider divider-light">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Trade and Marketing</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Creating the best variety in the world doesn’t matter if farmers can’t access it. But today,
                        most farmers don’t know what varieties they have, and don’t have access to better. We work to
                        make better plants available and accessible to farmers by strengthening seed systems, deploying
                        new tools, purifying seed lots, and training nurseries.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-white h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Trade and Marketing 1
                                </h4>
                            </div>
                            <img src="{{asset('assets/frontend/images/resistant_coffee.jpg')}}" class="img-fluid w-100"
                                 alt="">
                            <div class="card-body">
                                <p class="card-text">
                                    Enhance the productivity of climate-resilient coffee production in order to
                                    increase
                                    farmer profitability, the linchpin of farmer economic sustainability
                                </p>
                                <a href="#" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider divider-light">

            <div class="row">
                <div class="col-lg-6">
                    <h4>Education</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid amet
                        consequatur dolorem dolores ea fugiat illum ipsum libero minima molestiae natus nobis placeat
                        quos similique sint tempora, vitae voluptate voluptatem! Ab debitis dolorem eveniet facilis
                        provident quaerat soluta!
                    </p>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <hr class="divider divider-light">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Farming</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad asperiores error eum
                        exercitationem id illo incidunt iusto magnam nihil, nobis officia pariatur recusandae rem
                        sapiente sed tenetur totam vitae. Animi dicta ipsam nisi nobis nulla recusandae! Est, eveniet,
                        quo?
                    </p>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <hr class="divider divider-light">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Social Services</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eveniet inventore nobis quasi
                        quibusdam quisquam sed unde. Ab atque deleniti dicta dolores error excepturi expedita fuga modi,
                        molestiae molestias obcaecati placeat, provident repellat reprehenderit sunt velit vero
                        voluptatem? Animi, eum?
                    </p>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <hr class="divider divider-light">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Youth Programes</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid amet
                        consequatur dolorem dolores ea fugiat illum ipsum libero minima molestiae natus nobis placeat
                        quos similique sint tempora, vitae voluptate voluptatem! Ab debitis dolorem eveniet facilis
                        provident quaerat soluta!
                    </p>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>
@endsection
