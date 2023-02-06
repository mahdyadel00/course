  <!-- ==========Waves Section Starts Here========== -->
  <section class="section section-swiper-absoulte context-dark text-center wow fadeIn custom-section">
    <!-- Waves-->
    <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
    <!-- Swiper Content-->
    <div class="section-swiper-content">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-10">
                    <div class="badge-promo wow fadeScale" data-wow-delay=".6s"><span
                            class="badge-promo-text">Upcoming New 2023 event</span>
                        <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z"
                                fill="url( #svg-gradient-primary )"></path>
                            <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 0H319L299 25L319 49L0 0Z" fill="white"></path>
                        </svg>
                    </div>
                    <h4 class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp"
                        data-caption-delay="300" data-caption-duration="900">Hurryup! Don’t waste time</h4>
                    <h1 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100"
                        data-caption-duration="900">biggest marketing conference <br /> in Delta</h1>
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-md wow" data-splitting data-wow-delay="1.5s">
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left line-height-reset">
                                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                                        <use xlink:href="{{ asset('frontend') }}/assets/images/svg/sprite.svg"></use>
                                    </svg>
                                </div>
                                <div class="unit-body">
                                    <h5 class="text-spacing-100"><span class="big">Alhawwar club, Mansoura,
                                            Egypt</span></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left line-height-reset">
                                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                                        <use xlink:href="{{ asset('frontend') }}/assets/images/svg/sprite.svg"></use>
                                    </svg>
                                </div>
                                <div class="unit-body">
                                    <h5 class="text-spacing-100"><span class="big">
                                            <time datetime="2019-01-05">Mar 2 to 4, 2023</time></span></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Thumbnail Video Link-->
        <div class="video-link-wrapper d-none">
            <div class="unit align-items-center">
                <div class="unit-body text-right">
                    <h5><span class="big">Watch Promo<br> Video</span></h5>
                </div>
                <div class="unit-right">
                    <a class="video-link" href="#section-video" data-lightgallery="item">
                        <div class="video-link-bg" data-triangle=".video-link-overlay">
                            <span class="video-link-overlay"></span>
                        </div>
                        <span class="icon fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper Slider Absolute-->
    <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-simulate-touch="false"
        data-autoplay="8500" data-direction="horizontal" data-effect="fade">
        <div class="swiper-wrapper">
            <!-- Swiper Slide 01-->
            <div class="swiper-slide" data-slide-bg="{{ asset('frontend') }}/assets/images/slide1.jpg"></div>
            <!-- Swiper Slide 02-->
            <div class="swiper-slide" data-slide-bg="{{ asset('frontend') }}/assets/images/slide2.jpg"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- ==========Waves Section Ends Here========== -->
