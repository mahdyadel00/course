  <!-- ==========Header Section Starts Here========== -->
  <?php
$setting = App\Models\Settings::first();
?>
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
                              <a href="{{ route('course') }}">Course</a>
                          </li>
                          <li>
                              <a href="{{ route('pricing') }}">Pricing</a>
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
