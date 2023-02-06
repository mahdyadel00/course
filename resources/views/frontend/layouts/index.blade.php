{{--  --}}
@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <main>
        <!-- Modal -->
        <div class="body-overlay-desktop"></div>
        {{-- <div class="modal-wrapper text-center">
            <div class="close-icon">
                <i class="las la-times"></i>
            </div>
            <h2 class="modialTittle">Post Your <span>Ad</span> ?</h2>

                <div class="btn-wrapper">
                    <a href="{{ route('product.create') }}" class="cmn-btn02">Yes , Post ad</a>
                </div>

        </div> --}}

        <!-- Hero Area S t a r t -->
        @include('frontend.layouts.waves')
        <!-- End-of Hero  -->
        <!-- section_banner Area  S t a r t-->
        @include('frontend.layouts.section_banner')
        <!-- End-of section_banner -->
        <!-- About  S t a r t-->
        @include('frontend.layouts.aboutarea')
        <!-- End-of About  -->
        <!-- section_schedule Area S t a r t -->
        @include('frontend.layouts.section_schedule')
        <!-- End-of section_schedule  -->
        <!-- section_speaker Area S t a r t -->
        @include('frontend.layouts.section_speaker')
        <!-- End-of section_speaker  -->
        <!-- section_sponsor Area S t a r t -->
        @include('frontend.layouts.section_sponsor')
        <!-- End-of section_sponsor  -->
        <!-- section_event Listings  S t a r t -->
        @include('frontend.layouts.section_event')
        <!-- End-of section_event  -->
    </main>
@endsection
