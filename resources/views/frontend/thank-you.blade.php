@extends('frontend.layouts.master')
@section('pageTitle') welcome @endsection

@section('pageContent')
    <section class="section__thank_you bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="thank__you__wrapper">
                         <h1>
                             <img src="{{asset('assets/frontend/images/thankyou.png')}}" alt="thanks">
                         </h1>
                        <p>
                            For your great generosity! We, at Noah's Ark Farmers Association Uganda, greatly appreciate your donation, and your sacrifice. Your support is invaluable to us, thank you again!
                        </p>
                        <a href="/" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
