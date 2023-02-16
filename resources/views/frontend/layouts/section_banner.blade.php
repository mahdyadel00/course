 <!-- ==========Banner Section start Here========== -->
 <section class="banner-section">
     <div class="container">
         <div class="banner-wrapper shape-a">
             <div class="row gy-5 align-items-center">
                 <div class="col-lg-6 col-12">
                     <div class="banner-content">
                         @php
                             $now = Carbon\Carbon::now();
                             $end = Carbon\Carbon::create(2023, 3, 2);
                             $diff = $now->diffInDays($end);
                             //hours
                             $hours = $now->diffInHours($end);
                             $hours = $hours - $diff * 24;
                             //minutes
                             $minutes = $now->diffInMinutes($end);
                             $minutes = $minutes - $hours * 60;
                             //seconds
                             $seconds = $now->diffInSeconds($end);
                             $seconds = $seconds - $minutes * 60;
                         @endphp
                         <ul class="countdown count-down" data-date="{{ $end }}">
                             <li class="clock-item"><span class="count-number days">{{ $diff }}</span>
                                 <p class="count-text">Days</p>
                             </li>
                             <li class="clock-item"><span class="count-number hours">{{ $hours }}</span>
                                 <p class="count-text">Hour</p>
                             </li>
                             <li class="clock-item"><span class="count-number minutes">{{ $minutes }}</span>
                                 <p class="count-text">Min</p>
                             </li>
                             <li class="clock-item"><span class="count-number seconds">{{ $seconds }}</span>
                                 <p class="count-text">Sec</p>
                             </li>
                         </ul>
                         <h1>The Biggest Marketing Conference <br /> In DELTA 2023 </h1>
                         <p>Join Our International Conference Today! Please
                             Call us For More info.</p>
                         <a href="{{ route('register.show') }}" class="lab-btn"><span>Register Now</span> </a>
                         <!-- <div class="event-sponsored">
                             <p>Event Powered By:</p>
                             <img src="{{ asset('frontend') }}/assets/images/logo/logo-white.png" alt="sponsor">
                         </div> -->
                     </div>
                 </div>
                 <div class="col-lg-6 col-12">
                     <div class="banner-image">
                         <img src="{{ asset($setting->main_image) }}" alt="banner-img">
                         {{-- <h1 class="custom-h1">GMC</h1> --}}
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ==========Banner Section end Here========== -->
