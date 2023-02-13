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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('features.index') }}">Features</a></li>
                        <li><a href="{{ route('speakers.index') }}">Speakers</a></li>
                        <li><a href="{{ route('pricing.index') }}">Pricing</a></li>
                        <li><a href="{{ route('contacts') }}">Contact</a></li>
                    </ul>
                    @auth
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group btn-profile" role="group">
                                <button type="button" class="btn custom-btn dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset(auth()->user()->image) }}" alt="">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout.front') }}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('register.show') }}" class="ticket-btn lab-btn custom-btn">
                            <span>Register Now</span>
                        </a>
                        <a href="{{ route('login.show') }}" class="ticket-btn lab-btn custom-btn">
                            <span>Login</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->
