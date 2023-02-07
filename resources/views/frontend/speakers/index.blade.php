@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Our Talented Speakers</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a class="active">Speakers</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==== Speaker-section start here ===== -->
    <div class="speaker-section padding-tb padding-b custom">
        <div class="container">
            <!-- <div class="coming custom">
                <img src="{{ asset('frontend') }}/assets/images/rr.png" alt="">
            </div> -->
            <h2 class="h1 text-center">Our special surprise is</h2>
            <h4 class="h4 text-center">Foreign speakers from different countries and companies are giving talks in marketing
                topics.</h4>
            <div class="section-wrapper">
                <div class="row g-5">
                    @foreach ($speakers as $speaker)
                        <div class="col-lg-6 col-12">
                            <div class="speaker-item-2">
                                <div class="speaker-inner">
                                    <div class="speaker-thumb addClass">
                                        <a href="{{ route('speakers.details' , $speaker->id) }}">
                                            <img src="{{ asset($speaker->image) }}" alt="speaker" width="330px" height="369px">
                                        </a><br><br>
                                        <h4 style="text-align:center"><a href="{{ route('speakers.details' , $speaker->id) }}">{{ $speaker->name }}</a></h4>
                                    </div>
                                    <div class="speaker-content">
                                        <div class="speaker-content-inner">
                                            <h6><a href="{{ route('speakers.details' , $speaker->id) }}">{{ $speaker->job_title }}</a> </h6>
                                        </div>
                                        <ul class="speaker-shape">
                                            <li class="shape-1 shape">
                                                <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png"
                                                    alt="shape">
                                            </li>
                                            <li class="shape-2 shape">
                                                <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png"
                                                    alt="shape">
                                            </li>
                                            <li class="shape-3 shape">
                                                <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png"
                                                    alt="shape">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                     {{-- <div class="col-lg-6 col-12">
                    <div class="speaker-item-2">
                        <div class="speaker-inner">
                            <div class="speaker-thumb addClass">
                                <a href="speaker-details.html">
                                    <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/02.png" alt="speaker">
                                </a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-inner">
                                    <h6><a href="speaker-details.html">Taylor R. Miller</a> </h6>
                                    <p>Speaker</p>
                                </div>
                                <ul class="speaker-shape">
                                    <li class="shape-1 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png" alt="shape">
                                    </li>
                                    <li class="shape-2 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png" alt="shape">
                                    </li>
                                    <li class="shape-3 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png" alt="shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{--
                <div class="col-lg-6 col-12">
                    <div class="speaker-item-2">
                        <div class="speaker-inner show">
                            <div class="speaker-thumb addClass">
                                <a href="speaker-details.html">
                                    <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/03.png" alt="speaker">
                                </a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-inner">
                                    <h6><a href="speaker-details.html">Zisnad Q. Alex</a> </h6>
                                    <p>Speaker</p>
                                </div>
                                <ul class="speaker-shape">
                                    <li class="shape-1 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png" alt="shape">
                                    </li>
                                    <li class="shape-2 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png" alt="shape">
                                    </li>
                                    <li class="shape-3 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png" alt="shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="speaker-item-2">
                        <div class="speaker-inner">
                            <div class="speaker-thumb addClass">
                                <a href="speaker-details.html">
                                    <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/04.png" alt="speaker">
                                </a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-inner">
                                    <h6><a href="speaker-details.html">Ekez O. Menth</a> </h6>
                                    <p>Speaker</p>
                                </div>
                                <ul class="speaker-shape">
                                    <li class="shape-1 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png" alt="shape">
                                    </li>
                                    <li class="shape-2 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png" alt="shape">
                                    </li>
                                    <li class="shape-3 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png" alt="shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="speaker-item-2">
                        <div class="speaker-inner">
                            <div class="speaker-thumb addClass">
                                <a href="speaker-details.html">
                                    <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/05.png" alt="speaker">
                                </a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-inner">
                                    <h6><a href="speaker-details.html">Broklyn L. Doel</a> </h6>
                                    <p>Speaker</p>
                                </div>
                                <ul class="speaker-shape">
                                    <li class="shape-1 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png" alt="shape">
                                    </li>
                                    <li class="shape-2 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png" alt="shape">
                                    </li>
                                    <li class="shape-3 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png" alt="shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="speaker-item-2">
                        <div class="speaker-inner">
                            <div class="speaker-thumb addClass">
                                <a href="speaker-details.html">
                                    <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/06.png" alt="speaker">
                                </a>
                            </div>
                            <div class="speaker-content">
                                <div class="speaker-content-inner">
                                    <h6><a href="speaker-details.html">Mr. Rassel mrh</a> </h6>
                                    <p>Speaker</p>
                                </div>
                                <ul class="speaker-shape">
                                    <li class="shape-1 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-1.png" alt="shape">
                                    </li>
                                    <li class="shape-2 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-2.png" alt="shape">
                                    </li>
                                    <li class="shape-3 shape">
                                        <img src="{{ asset('frontend') }}/assets/images/speakers/speaker-2/shape-3.png" alt="shape">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- ==== Speaker-section end here ===== -->
@endsection
