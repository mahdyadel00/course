<?php
$setting = App\Models\Settings::first();
?>
<<<<<<< HEAD
  <header class="header-section">
      <div class="header-bottom">
          <div class="container">
              <div class="header-wrapper">
                  <div class="logo custom-img">
                      <a href="{{  route('home') }}">
                          <img src="{{ $setting->logo }}" alt="logo">
                          <!-- <h1>GMC</h1> -->
                      </a>
                  </div>
                  <div class="menu-area">
                      <ul class="menu">
                          <li>
                              <a href="{{route('home')}}">Home</a>
                          </li>
                          <li>
                              <a href="{{ route('features') }}">Features</a>
                          </li>
                          <li>
                              <a href="{{ route('speakers.index') }}">Speakers</a>
                          </li>
                          <li>
=======
<header class="header-section">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo custom-img">
                    <a href="{{ route('home') }}">
                        <!-- <img src="{{ $setting->logo }}" alt="logo"> -->
                        <h1>GMC</h1>
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
>>>>>>> 0375da4ac1c2f4bc99ca8913094cdaac53ce09c4
                              <a href="{{ route('course') }}">Course</a>
                          </li>
                          <li>
                              <a href="{{ route('pricing') }}">Pricing</a>
<<<<<<< HEAD
                          </li>
                          <li><a href="{{ route('contacts') }}">Contact</a></li>
                      </ul>
                      <a href="{{ route('register.show') }}" class="ticket-btn lab-btn custom-btn">
                          <span>Register Now</span>
                      </a>
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
=======
                          </li> -->
                        <li><a href="{{ route('contacts') }}">Contact</a></li>
                    </ul>
                    @if (auth()->check())
                        <a href="{{ route('logout.front') }}" class="ticket-btn lab-btn custom-btn">
                            <span>Logout</span>
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
>>>>>>> 0375da4ac1c2f4bc99ca8913094cdaac53ce09c4
