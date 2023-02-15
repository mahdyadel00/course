   <!-- ======= Sponsor sectin start here ======== -->
   <section class="content-section no-bottom-spacing">
       <div class="section-bg" data-background="{{ asset('frontend') }}/assets/images/section-bg02.png" data-scroll
           data-scroll-speed="1">
       </div>
       <!-- end section-bg -->
       <div class="container">
           <div class="row justify-content-center text-center">
               <div class="col-12">
                   <div data-scroll data-scroll-speed="0.5">
                       <div class="section-header">
                           <h2>Event Sponsors</h2>
                           <p>Check Who Makes The Event Possible</p>
                       </div>
                   </div>
               </div>
               <div class="col-12"> <strong class="sponsor-title">Main sponsors</strong> </div>
               @foreach ($sponser_one as $s_one)
                   <div class="col-lg-2 col-md-3 col-6">
                       <div data-scroll data-scroll-speed="0.5">
                           <figure class="sponsor-logo"> <img src="{{ asset($s_one->image) }}" alt="Image">
                               <figcaption><a href="{{ $s_one->link }}">{{ $s_one->name }}</a></figcaption>
                           </figure>
                       </div>
                   </div>
               @endforeach
               {{-- <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img src="{{ asset('frontend') }}/assets/images/sponsor/isis.png"
                               alt="Image">
                           <figcaption><a href="#">ISIS</a></figcaption>
                       </figure>
                   </div>
               </div> --}}
               <div class="clearfix spacing-50"></div>
               <div class="col-12"> <strong class="sponsor-title">Other sponsors</strong> </div>
               @foreach ($sponser_two as $s_two)
                   <div class="col-lg-2 col-md-3 col-6">
                       <div data-scroll data-scroll-speed="0.5">
                           <figure class="sponsor-logo"> <img src="{{ asset($s_two->image) }}" alt="Image">
                               <figcaption><a href="{{ $s_two->link }}">{{ $s_two->name }}</a></figcaption>
                           </figure>
                       </div>
                   </div>
               @endforeach
               {{-- <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/soul-bar.png" alt="Image">
                           <figcaption><a href="#">Soul</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img src="{{ asset('frontend') }}/assets/images/sponsor/cat.png"
                               alt="Image">
                           <figcaption><a href="#">Cat</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img src="{{ asset('frontend') }}/assets/images/sponsor/ix.png"
                               alt="Image">
                           <figcaption><a href="#">IX</a></figcaption>
                       </figure>
                   </div>
               </div> --}}
               <div class="clearfix spacing-50"></div>
               <div class="col-12"> <strong class="sponsor-title">Speakers From</strong> </div>
               @foreach ($sponser_three as $s_three)
                   <div class="col-lg-2 col-md-3 col-6">
                       <div data-scroll data-scroll-speed="0.5">
                           <figure class="sponsor-logo"> <img src="{{ asset($s_three->image) }}" alt="Image">
                               <figcaption><a href="{{ $s_three->link }}">{{ $s_three->name }}</a></figcaption>
                           </figure>
                       </div>
                   </div>
               @endforeach
               {{-- <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="-0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/microsoft.png" alt="Image">
                           <figcaption><a href="#">Microsoft</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/samsung.png" alt="Image">
                           <figcaption><a href="#">Samsung</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="-0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/philips.png" alt="Image">
                           <figcaption><a href="#">Philips</a></figcaption>
                       </figure>
                   </div>
               </div>

               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/linked-in.png" alt="Image">
                           <figcaption><a href="#">Linkedin</a></figcaption>
                       </figure>
                   </div>
               </div> --}}

               <div class="clearfix"></div>
               {{-- @foreach ($sponser_four as $s_four)
                   <div class="col-lg-2 col-md-3 col-6">
                       <div data-scroll data-scroll-speed="-0.5">
                           <figure class="sponsor-logo"> <img src="{{ asset($s_four->imge) }}" alt="Image">
                               <figcaption><a href="{{ $s_four->link }}">{{ $s_four->name }}</a></figcaption>
                           </figure>
                       </div>
                   </div>
               @endforeach --}}
               {{-- <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/semrush.png" alt="Image">
                           <figcaption><a href="#">Semrush</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="-0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/nestle.png" alt="Image">
                           <figcaption><a href="#">Nestle</a></figcaption>
                       </figure>
                   </div>
               </div>
               <div class="col-lg-2 col-md-3 col-6">
                   <div data-scroll data-scroll-speed="-0.5">
                       <figure class="sponsor-logo"> <img
                               src="{{ asset('frontend') }}/assets/images/sponsor/huawei.png" alt="Image">
                           <figcaption><a href="#">Huawei</a></figcaption>
                       </figure>
                   </div>
               </div> --}}
               <!-- end col-2 -->
           </div>
           <!-- end row -->
       </div>
       <!-- end container -->
   </section>
   <!-- ======= Sponsor sectin end here ======== -->
