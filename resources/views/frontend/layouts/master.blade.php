<!DOCTYPE html>
<html lang="en">
<?php
$setting = App\Models\Settings::first();
$gifit = App\Models\Gifit::first();
$sponsers = App\Models\Sponser::get();
// $topic_firstDay = App\Models\TopicSpeaker::with('speaker')
//     ->where('days', 'First Day')
//     ->get();
// $topic_secondDay = App\Models\TopicSpeaker::with('speaker')
//     ->where('days', 'Second Day')
//     ->get();
// $topic_thirdDay = App\Models\TopicSpeaker::with('speaker')
//     ->where('days', 'Third Day')
//     ->get();
?>

<head>
    <title>GMC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://gmc.geexar.com" />
    <meta property="og:title" content="GMC" />
    <meta property="og:description" content="Biggest marketing conference in Egypyt" />
    <meta property="og:image" content="{{ asset('frontend') }}/assets/images/logo/sub-image.png" />

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/x-icon/01.png">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fonts.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom-style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
</head>

<body>
    @include('frontend.layouts.header')
    <div class="preloader">
        <div class="inner">
            <figure><img src="{{ asset('frontend') }}/assets/images/logo/logo-white.png" alt="Image"></figure>
            <div class="percentage" id="percentage">0</div>
        </div>
        <!-- end inner -->
        <div class="loader-progress" id="loader-progress"> </div>
        <!-- end loader-progress -->
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path d="M-4.5,1080H1920V0H0c-10.2,134.8,0.1,311.5,0,541C-0.1,769.5,0,948-4.5,1080z"></path>
        </svg>
    </div>
    @yield('content')
    <!-- Footer Section start here -->
    <footer class="footer-section" style="background-image: url(assets/images/bg-images/footer-bg.png);">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <a href="tel:+201050501011">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/01.png"
                                            alt="Phone-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Phone Number : {{ $setting->phone }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <a href="mailto:{{ $setting->email }}">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/02.png"
                                            alt="email-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Email : {{ $setting->email }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <a target="_blank" href="https://goo.gl/maps/Y42tJBSNb9KrmJ59A">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/03.png"
                                            alt="location-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Address : {{ $setting->address }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-tb">
            <div class="container">
                <div class="row shape-c">
                    <div class="col-md-3 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <img src="{{ asset('frontend') }}/assets/images/logo/logo-white.png"
                                        alt="">
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-30">{!! $setting->description !!}</p>
                                    <ul class="social-icons">
                                        <li><a href="{{ $setting->facebook_link }}"><i
                                                    class="icofont-facebook"></i></a></li>
                                        <li><a href="{{ $setting->twitter_link }}"><i class="icofont-twitter"></i></a>
                                        </li>
                                        <li><a href="{{ $setting->linkedin_link }}"><i class="icofont-linkedin"></i></a>
                                        </li>
                                        <li><a href="{{ $setting->instgram_link }}"><i
                                                    class="icofont-instagram"></i></a></li>
                                        <li><a href="{{ $setting->dirbble_link }}"><i class="icofont-dribble"></i></a>
                                        </li>
                                        <li><a href="{{ $setting->vimo_link }}"><i class="icofont-vimeo"></i></a></li>
                                        <li><a href="{{ $setting->behance_link }}"><i class="icofont-behance"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>Links</h5>
                                </div>
                                <div class="fm-item-content">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('features.index') }}">Features</a></li>
                                        <li><a href="{{ route('speakers.index') }}">Speakers</a></li>
                                        <li><a href="{{ route('courses.index') }}">Diploma</a></li>
                                        <li><a href="{{ route('pricing.index') }}">Pricing</a></li>
                                        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-5 mb-lg-0">
                                <div class="fm-item-title mb-2">
                                    <h5>SPONSORS</h5>
                                </div>
                                <div class="fm-item-content">
                                    <div class="row">
                                        @foreach ($sponsers as $sponser)
                                            <div class="col-sm-2 mb-3">
                                                <a href="{{ $sponser->link }}">
                                                    <img src="{{ asset($sponser->image) }}" alt="Phone-icon">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2023 Powered By: <a target="_blank"
                                    href="https://geexar.com/">{{ $setting->title }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section end here -->
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->
    <div class="block-with-svg-gradients">
        <svg xmlns="http://www.w3.org/2000/svg">
            <defs>
                <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%"
                    y2="0%">
                    <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
                    <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
                </lineargradient>
            </defs>
        </svg>
    </div>
    <script src="{{ asset('frontend') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/fontawesome.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/circularProgressBar.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/lightcase.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/locomotive-scroll.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/preloadScript.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/core.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom-script.js"></script>
</body>

</html>
