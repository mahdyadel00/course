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
                    <li><a href="{{ route('diplomas.index') }}">Diploma</a></li>
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
                <h2>Our Diploma Plan</h2>
                <p>Choose Your Plan That Fits You Best</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach ($diplomas as $diploma)
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="pricing-item">
                                <div class="pricing-inner">
                                    <div class="pricing-header" style="width:352px;height:207px">
                                        <h3>{{ $diploma->title }}</h3>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="facilites">
                                            <li class="facility-item">
                                                <span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </span>
                                                {!! $diploma->description !!}
                                            </li>
                                        </ul>
                                        @auth
                                            <div class="get-ticket">
                                                <a href="#">
                                                    <ul>
                                                        <li class="vat">
                                                            <h4>{{ $diploma->price }}</h4>
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
                                                            <h4>${{ $diploma->diploma }}</h4>
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
@endsection
