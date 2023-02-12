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
                    <li><a href="{{ route('pricing')  }}">Pricing</a></li>
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
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>1-Day-Pass</h3>
                                    <p>For Normal Seating</p>
                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>Full Pass</h3>
                                    <p>For Corporate Seating</p>
                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h3>VIP Pass</h3>
                                    <p>For VIP Seating</p>
                                </div>
                                <div class="pricing-content">
                                    <ul class="facilites">
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Event Attendance
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Networking Area Access
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Tea And Coffee
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Lunch
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> Free Wifi
                                        </li>
                                        <li class="facility-item">
                                            <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span> 3 Lottery Ticket
                                        </li>
                                    </ul>
                                    <div class="get-ticket">
                                        <a href="#">
                                            <ul>
                                                <li class="vat">
                                                    <h4>$24</h4>
                                                    <p>ex. VAT</p>
                                                </li>
                                                <li class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </li>
                                                <li class="ticket-text">
                                                    <p>Get Ticket</p>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <p>Our Complimentary Gifts For You</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="gift-content">
                            <p>
                                It is a long established fact that a reader will be distracted by theing
                                readable content of a page when looking at its layout. The point info
                                using Lorem Ipsum is that it has a more-or-less
                            </p>
                            <ul class="gift-list">
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Exclusive T-shirt</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Lather Bag</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Mug</li>
                                <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> Gift Hamper</li>
                            </ul>
                            <div class="register-button">
                                <a href="{{ route('register.show') }}" class="lab-btn"><span>Register Now</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-part">
                        <div class="row">
                            <div class="col-xs-12">
                                <img src="{{ asset('frontend') }}/assets/images/gift/01.png" alt="gift-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Event Gift end here  ==== -->
@endsection
