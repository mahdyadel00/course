<!DOCTYPE html>
<html lang="en">
<?php
$setting = App\Models\Settings::first();
?>

<head>
    <title>GMC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://gmc.geexar.com" />
    <meta property="og:title" content="GMC" />
    <meta property="og:description" content="Biggest marketing conference in Delta" />
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
                                        <span>Address : Alhawwar club, Mansoura</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md custom-img custom-logo">
                        <img src="{{ $setting->logo }}" alt="">
                    </div>
                    <div class="col-md">
                        <img src="{{ asset('frontend') }}/assets/images/logo/logo-white.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2023 Powered By: <a target="_blank"
                                    href="https://geexar.com/">{{ $setting->title_en }}</a></p>
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
                <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
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
