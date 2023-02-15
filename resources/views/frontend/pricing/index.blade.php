@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Purchase a Ticket</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('pricing.index') }}">Pricing</a></li>
                    <li><a class="active">Ticket</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    <!-- ===== Pricing Plan Start here  ==== -->
    <section class="pricing-plan-section padding-tb padding-b">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing Plan</h2>
                <p>Choose Your Plan That Fits You Best</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach ($pricing as $price)
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="pricing-item">
                                <div class="pricing-inner">
                                    <div class="pricing-header" style="width:352px;height:207px">
                                        <h3>{{ $price->title }}</h3>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="facilites">
                                            <li class="facility-item">
                                                <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </span>
                                                {!! $price->description !!}
                                            </li>
                                        </ul>
                                        @auth
                                            <div class="get-ticket">
                                                <a href="#">
                                                    <ul>
                                                        <li class="vat">
                                                            <h4>${{ $price->price }}</h4>
                                                            {{-- <p>ex. VAT</p> --}}
                                                        </li>
                                                        <li class="icon">
                                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="ticket-text">
                                                            <p>Get Ticket</p>
                                                        </li>
                                                    </ul>
                                                </a>
                                            </div>
                                        @else
                                            <div class="get-ticket">
                                                <a href="{{ route('login.show') }}">
                                                    <ul>
                                                        <li class="vat">
                                                            <h4>${{ $price->price }}</h4>
                                                        </li>
                                                        <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        </li>
                                                        <li class="ticket-text">
                                                            <p>Get Ticket</p>
                                                        </li>
                                                    </ul>
                                                </a>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Pricing Plan end here  ==== -->
    <!-- ===== Event Gift start here  ==== -->
    <section class="event-gift-section padding-tb padding-b bg-image">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 col-12">
                    <div class="section-header">
                        <h2>Event Gifts</h2>
                        <p>Our Encouragment Gifts For You</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="gift-content">
                            <p>
                                In appreciation of your endeavor to develop yourself, ad to encourage you, GMC offers some
                                valuable gifts such as:
                            </p>
                            <ul class="gift-list">
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> 50% discount on GMC diploma for all attendees.</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> 200 job opportunities for GMC community.</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> 5 apprenticeships for GMC community.</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> 5 workshops for 25 attendees.</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> 10 opportunities to attend the first week of the diploma for FREE.</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Other special and worthy gifts are waiting for you during the conference.</li>
                            </ul>
                            <div class="register-button">
                                <a href="{{ route('register.show') }}" class="lab-btn"><span>Register Now</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-part">
                        <img src="{{ asset('frontend') }}/assets/images/gift/gift.png" alt="gift-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Event Gift end here  ==== -->
@endsection
