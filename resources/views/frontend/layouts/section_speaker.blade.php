<!-- Speakers section start here -->
<section class="speakers-section padding-tb padding-b">
    <div class="container">
        <div class="section-header">
            <h2>Our Speakers</h2>
            <p>Meet Our World’s Leading Speakers</p>
        </div>
        <div class="section-wrapper shape-b">
            <div class="row g-5">
                @foreach ($speakers as $speaker)
                    <div class="col-lg-6 col-12">
                        <div class="speaker-item">
                            <div class="speaker-inner">
                                <div class="speaker-thumb">
                                    <a href="{{ route('speakers.details', $speaker->id) }}">
                                        <img src="{{ asset($speaker->image) }}" alt="speaker">
                                    </a>
                                </div>
                                <div class="speaker-content">
                                    <div class="spkr-content-title">
                                        <h5><a
                                                href="{{ route('speakers.details', $speaker->id) }}">{{ $speaker->name }}</a>
                                        </h5>
                                        @if ($speaker->job_title)
                                            <p>{{ $speaker->job_title }}</p>
                                        @endif
                                    </div>
                                    <div class="spkr-content-details">
                                        <ul class="social-icons">
                                            @if ($speaker->facebook)
                                                <li><a target="_blank" href="{{ $speaker->facebook }}"><i
                                                            class="icofont-facebook"></i></a></li>
                                            @endif
                                            @if ($speaker->twitter)
                                                <li><a target="_blank" href="{{ $speaker->twitter }}"><i
                                                            class="icofont-twitter"></i></a></li>
                                            @endif
                                            @if ($speaker->instagram)
                                                <li><a target="_blank" href="{{ $speaker->instagram }}"><i
                                                            class="icofont-instagram"></i></a></li>
                                            @endif
                                            @if ($speaker->linkedin)
                                                <li><a target="_blank" href="{{ $speaker->linkedin }}"><i
                                                            class="icofont-linkedin"></i></a></li>
                                            @endif
                                            @if ($speaker->tiktok)
                                                <li><a target="_blank" href="{{ $speaker->tiktok }}"><img
                                                            src="{{ asset('frontend') }}/assets/images/tik.png"
                                                            alt=""></a></li>
                                            @endif
                                            @if ($speaker->youtube)
                                                <li><a target="_blank" href="{{ $speaker->youtube }}"><i
                                                            class="icofont-youtube"></i></a></li>
                                            @endif
                                            @if ($speaker->behance)
                                                <li><a target="_blank" href="{{ $speaker->behance }}"><i
                                                            class="icofont-behance"></i></a></li>
                                            @endif
                                            @if ($speaker->vimeo)
                                                <li><a target="_blank" href="{{ $speaker->vimeo }}"><i
                                                            class="icofont-vimeo"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="download-button text-center mt-5">
            </div>
        </div>
    </div>
</section>
<!-- Speakers section end here -->
