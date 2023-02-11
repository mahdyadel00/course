<?php
$setting = App\Models\Settings::first();
?>
<header class="header-section">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo custom-img">
                    <a href="{{ route('home') }}">
                        <img src="{{ $setting->logo }}" alt="logo">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('features') }}">Features</a>
                        </li>
                        <li>
                            <a href="{{ route('speakers.index') }}">Speakers</a>
                        </li>
                        <!-- <li>
                              <a href="{{ route('course') }}">Course</a>
<<<<<<< HEAD
                          </li>
                          <li>
                              <a href="{{ route('pricing') }}">Pricing</a>
                          </li> -->
                          <li><a href="{{ route('contacts') }}">Contact</a></li>
                      </ul>
                      @if (auth()->check())
                        <!-- <a href="{{ route('logout.front') }}" class="ticket-btn lab-btn custom-btn">
                            <span>Logout</span> -->
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group btn-profile" role="group">
                                    <button type="button" class="btn custom-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('frontend') }}/assets/images/sponsor/google.png" alt="">
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout.front') }}">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
=======
                          </li>-->
                        <li>
                            <a href="{{ route('pricing') }}">Pricing</a>
                        </li>
                        <li><a href="{{ route('contacts') }}">Contact</a></li>
                    </ul>
                    @if (auth()->check())
                        <a href="{{ route('logout.front') }}" class="ticket-btn lab-btn custom-btn">
                            <span>Logout</span>
>>>>>>> 2278b1a (add polices)
                        @else
                            <a href="{{ route('register.show') }}" class="ticket-btn lab-btn custom-btn">
                                <span>Register Now</span>
                            </a>
                    @endif
                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->
