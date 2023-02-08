@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $speaker->name }}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('speakers.index') }}">Speakers</a></li>
                    <li><a class="active">Speaker-Details</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Scholar single section start Here -->
    <div class="scholar-single-section padding-tb padding-b">
        <div class="container">
            <div class="section-wrapper rounded">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="scholar-left">
                                <div class="scholar-single-item">
                                    <div class="scholar-single-thumb" style="width: 330px; height: 363px;">
                                        <img src="{{ asset($speaker->image) }}" alt="scholar" />
                                    </div>
                                    <div>
                                        <span class="d-inline-block">Details</span>
                                        <p>{!! $speaker->personal_info !!}</p>
                                    </div>
                                    {{-- <div class="scholar-single-content">
                                        <span class="h7">Personal Language Skill</span>
                                        <div class="skill-bar d-flex">
                                            <div class="skill-item">
                                                <div class="pie"
                                                    data-pie='{ "index": 3, "percent": 80, "colorSlice": "#5338AA", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                            "fontSize": "1.125rem","fontColor":"#ffffff" }'>
                                                </div>
                                                <span>English</span>
                                            </div>
                                            <div class="skill-item">
                                                <div class="pie"
                                                    data-pie='{ "index": 6, "percent": 70, "colorSlice": "#5338AA", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                            "fontSize": "1.125rem","fontColor":"#ffffff" }'>
                                                </div>
                                                <span>Develop</span>
                                            </div>
                                            <div class="skill-item">
                                                <div class="pie"
                                                    data-pie='{ "index": 4, "percent": 60, "colorSlice": "#5338AA", "colorCircle": "#f1f1f1", "fontWeight": 700, "stroke": 5, "size": 90,
                                            "fontSize": "1.125rem","fontColor":"#ffffff" }'>
                                                </div>
                                                <span>Motive</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <div class="scholar-intro">
                                    <h5>{{ $speaker->name }}</h5>
                                </div>
                                <div class="scholar-info">
                                    <span class="h7 mb-3">Personal Statement</span>
                                    <p class="mb-4">{!! $speaker->description !!}</p>
                                    <div class="scholar-other-info">
                                        <ul class="lab-ul">
                                            <li><span class="info-title">Address </span><span class="info-details">:
                                                    {{ $speaker->address }}</span></li>
                                            @if ($speaker->website)
                                                <li><span class="info-title">Website</span><span class="info-details">:
                                                        {{ $speaker->website }}</span></li>
                                            @endif
                                            <li><span class="info-title">Social Media</span>
                                                <div class="info-details">
                                                    <ul class="lab-ul d-flex">
                                                        @if ($speaker->twitter)
                                                            <li>: <a target="_blank" href="{{ $speaker->twitter }} "
                                                                    class="twitter"><i class="icofont-twitter"></i></a>
                                                            </li>
                                                        @endif
                                                        @if ($speaker->facebook)
                                                            <li><a target="_blank" href="{{ $speaker->facebook }}"
                                                                    class="linkedin"><i class="icofont-facebook"></i></a>
                                                            </li>
                                                        @endif
                                                        @if ($speaker->instagram)
                                                            <li><a target="_blank" href="{{ $speaker->instagram }}"
                                                                    class="instagram"><i class="icofont-instagram"></i></a>
                                                            </li>
                                                        @endif
                                                        @if ($speaker->youtube)
                                                            <li> <a target="_blank" href="{{ $speaker->tiktok }}"
                                                                    class="tiktok">
                                                                    <img src="{{ asset('frontend') }}/assets/images/tik.png"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if ($speaker->linkedin)
                                                            <li><a target="_blank" href="{{ $speaker->linkedin }}"
                                                                    class="linkedin"><i class="icofont-linkedin"></i></a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="scholar-award">
                                    <span class="h7">Recognitions Award</span>
                                    <ul class="all-awards lab-ul d-flex">
                                        <li class="single-award">
                                            <img src="{{ asset('frontend') }}/assets/images/team/award/01.png" alt="award">
                                            <p>Award 2016</p>
                                        </li>
                                        <li class="single-award">
                                            <img src="{{ asset('frontend') }}/assets/images/team/award/02.png" alt="award">
                                            <p>Award 2017</p>
                                        </li>
                                        <li class="single-award">
                                            <img src="{{ asset('frontend') }}/assets/images/team/award/03.png" alt="award">
                                            <p>Award 2018</p>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scholar single section end Here -->
@endsection
