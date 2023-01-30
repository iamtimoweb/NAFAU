<div class="programs-sidebar">
    <div class="programs">
        <ul class="programs-link-item">
            <li class="{{ Request::segment(2) == "trade_and_marketing"?"active":"" }}">
                <a href="{{route('frontend.trade_and_marketing')}}">Trade and Marketing</a>
            </li>
            <li class="{{ Request::segment(2) == "education"?"active":"" }}">
                <a href="{{route('frontend.education')}}">Education</a>
            </li>
            <li class="{{ Request::segment(2) == "farming"?"active":"" }}">
                <a href="{{route('frontend.farming')}}">Farming</a>
            </li>
            <li class="{{ Request::segment(2) == "social_services"?"active":"" }}">
                <a href="{{route('frontend.social_services')}}">Social Services</a>
            </li>
            <li class="{{ Request::segment(2) == "youth_programes"?"active":"" }}">
                <a href="{{route('frontend.youth_programes')}}">Youth Programes</a>
            </li>
        </ul>
    </div>
    <div class="programs call-to-action bg-dark">
        <h3>Need help?</h3>
        <p>
            We'd love to hear from you Give us call, send us a message?
        </p>
        <a href="{{route('frontend.contact')}}" class="btn btn-primary btn-sm">Contact Us</a>
    </div>
</div>
