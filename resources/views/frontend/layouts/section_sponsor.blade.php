<!-- ======= Sponsor sectin start here ======== -->
<section class="content-section no-bottom-spacing">
    <div class="section-bg" data-background="{{ asset('frontend') }}/assets/images/section-bg02.png" data-scroll
        data-scroll-speed="1">
    </div>
    <!-- end section-bg -->
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div data-scroll data-scroll-speed="0.5">
                    <div class="section-header">
                        <h2>Conference Sponsors</h2>
                        <p>Check Who Makes The Event Possible</p>
                    </div>
                </div>
            </div>
            <div class="col-12"> <strong class="sponsor-title">Main sponsors</strong> </div>
            @foreach ($main_sponsers as $main)
                <div class="col-lg-2 col-md-3 col-6">
                    <div data-scroll data-scroll-speed="0.5">
                        <figure class="sponsor-logo"> <img src="{{ asset($main->image) }}" alt="Image">
                            <figcaption><a href="{{ $main->link }}">{{ $main->name }}</a></figcaption>
                        </figure>
                    </div>
                </div>
            @endforeach
            <div class="clearfix spacing-50"></div>
            <div class="col-12"> <strong class="sponsor-title">Other sponsors</strong> </div>
            @foreach ($others_sponsers as $other)
                <div class="col-lg-2 col-md-3 col-6">
                    <div data-scroll data-scroll-speed="0.5">
                        <figure class="sponsor-logo"> <img src="{{ asset($other->image) }}" alt="Image">
                            <figcaption><a href="{{ $other->link }}">{{ $other->name }}</a></figcaption>
                        </figure>
                    </div>
                </div>
            @endforeach
            {{-- <div class="clearfix spacing-50"></div>
            <div class="col-12"> <strong class="sponsor-title">Speakers From</strong> </div>
            @foreach ($sponser_three as $s_three)
                <div class="col-lg-2 col-md-3 col-6">
                    <div data-scroll data-scroll-speed="0.5">
                        <figure class="sponsor-logo"> <img src="{{ asset($s_three->image) }}" alt="Image">
                            <figcaption><a href="{{ $s_three->link }}">{{ $s_three->name }}</a></figcaption>
                        </figure>
                    </div>
                </div>
            @endforeach --}}
            <div class="clearfix"></div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- ======= Sponsor sectin end here ======== -->
