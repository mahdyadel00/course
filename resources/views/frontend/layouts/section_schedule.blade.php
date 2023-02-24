<!-- ==========schedule Section start Here========== -->
<section class="section section-lg bg-default text-center">
    <div class="container">
        <div class="section-header text-center">
            <h2>Conference Schedule</h2>
        </div>
        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
            <!--Nav tabs-->
            <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker"
                        href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"><span
                            class="nav-link-overlay"></span><span class="nav-link-cite">First Day</span><span
                            class="nav-link-title">March 02, 2023</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-link-purple-heart" href="#tabs-1-2"
                        data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span
                            class="nav-link-cite">Second Day</span><span class="nav-link-title">March 03,
                            2023</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-link-primary" href="#tabs-1-3"
                        data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span
                            class="nav-link-cite">Third Day</span><span class="nav-link-title">March 04,
                            2023</span></a></li>
            </ul>
            <!--Tab panes-->
            <div class="tab-content wow fadeIn">
                <div class="tab-pane fade" id="tabs-1-1">
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                        aria-multiselectable="false">
                        <!--Bootstrap card-->
                        @foreach ($topic_firstDay as $topic_fday)
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title">
                                        {{-- @php
                                         $now = Carbon\Carbon::now();
                                                    $startDate = Carbon\Carbon::createFromFormat($topic_fday);
                                                    dd($startDate);
                                                    $endDate = Carbon\Carbon::createFromFormat('Y-m-d', '2021-06-30');

                                                    $posts = Post::whereBetween('created_at', [$startDate, $endDate])->get();
                                        @endphp --}}
                                        <a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1" href="#AhmedEmad"
                                            aria-controls="AhmedEmad" aria-expanded="false" role="button"><span
                                                class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset($topic_fday->speaker ? $topic_fday->speaker->image : '') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">{{ $topic_fday->start_time }}
                                                                To {{ $topic_fday->end_time }}</span>
                                                            <span class="schedule-classic-title heading-4">{{ $topic_fday->title }}</span>
                                                            <span class="schedule-classic-author">by
                                                                <span
                                                                    class="schedule-classic-author-name">{{ $topic_fday->speaker ? $topic_fday->speaker->name : '' }}
                                                                </span>
                                                                -{{ $topic_fday->speaker ? $topic_fday->speaker->job_title : '' }}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="SS" aria-labelledby="accordion1-card-head-hpaxeker"
                                    data-parent="#accordion1" role="tabpanel">
                                    <div class="card-body">
                                        <p>{{ $topic_fday->title }}</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                {{-- <h5>Where</h5> --}}
                                                <p class="font-secondary">{{ $topic_fday->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist"
                        aria-multiselectable="false">
                        <!--Bootstrap card-->
                        @foreach ($topic_secondDay as $topic_sday)
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1" href="#AhmedEmad"
                                            aria-controls="AhmedEmad" aria-expanded="false" role="button"><span
                                                class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset($topic_sday->speaker ? $topic_sday->speaker->image : '') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">{{ $topic_sday->start_time }}
                                                                To {{ $topic_sday->end_time }}</span>
                                                            {{-- <span class="schedule-classic-title heading-4">........</span> --}}
                                                            <span class="schedule-classic-author">by
                                                                <span
                                                                    class="schedule-classic-author-name">{{ $topic_sday->speaker ? $topic_sday->speaker->name : '' }}
                                                                </span>
                                                                -{{ $topic_sday->speaker ? $topic_sday->speaker->job_title : '' }}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="AhmedEmad" aria-labelledby="accordion1-card-head-hpaxeker"
                                    data-parent="#accordion1" role="tabpanel">
                                    <div class="card-body">
                                        <p>{{ $topic_sday->title }}</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                {{-- <h5>Where</h5> --}}
                                                <p class="font-secondary">{{ $topic_sday->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-3">
                    <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist"
                        aria-multiselectable="false">
                        <!--Bootstrap card-->
                        @foreach ($topic_thirdDay as $topic_thday)
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1" href="#AhmedEmad"
                                            aria-controls="AhmedEmad" aria-expanded="false" role="button"><span
                                                class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset($topic_thday->speaker ? $topic_thday->speaker->image : '') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">{{ $topic_thday->start_time }}
                                                                To {{ $topic_thday->end_time }}</span>
                                                            {{-- <span class="schedule-classic-title heading-4">........</span> --}}
                                                            <span class="schedule-classic-author">by
                                                                <span
                                                                    class="schedule-classic-author-name">{{ $topic_thday->speaker ? $topic_thday->speaker->name : '' }}
                                                                </span>
                                                                -{{ $topic_thday->speaker ? $topic_thday->speaker->job_title : '' }}</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse" id="AhmedEmad" aria-labelledby="accordion1-card-head-hpaxeker"
                                    data-parent="#accordion1" role="tabpanel">
                                    <div class="card-body">
                                        <p>{{ $topic_thday->title }}</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                {{-- <h5>Where</h5> --}}
                                                <p class="font-secondary">{{ $topic_thday->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
