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
                    <li><a href="{{ route('speakers.index') }}">Profile</a></li>
                    <li><a class="active">Profile-Details</a></li>
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
                                    <!-- <div class="scholar-single-content">
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
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scholar single section end Here -->
@endsection
