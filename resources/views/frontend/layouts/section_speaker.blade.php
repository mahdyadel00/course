   <!-- Speakers section start here -->
   <section class="speakers-section padding-tb padding-b">
       <div class="container">
           <div class="section-header">
               <h2>Our Speakers</h2>
               <p>Meet Our World’s Leading Speakers</p>
           </div>
           <div class="section-wrapper shape-b">
               <div class="row g-5">
                @foreach ($speakers as $speaker)
                <div class="col-lg-6 col-12">
                    <div class="speaker-item">
                        <div class="speaker-inner">
                            <div class="speaker-thumb">
                                <img src="{{ asset($speaker->image) }}" alt="speaker">
                            </div>
                            <div class="speaker-content">
                                <div class="spkr-content-title">
                                     <h5><a href="{{ route('speakers.details' , $speaker->id) }}">{{ $speaker->name }}</a> </h5>
                                    <p>{{ $speaker->job_title }}</p>
                                </div>
                                <div class="spkr-content-details">
                                    <p>{{ $speaker->personal_info }}</p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="{{ $speaker->facebook }}"><i class="icofont-facebook"></i></a></li>
                                        <li><a target="_blank" href="{{ $speaker->twitter }}"><i class="icofont-twitter"></i></a></li>
                                        <li><a target="_blank" href="{{ $speaker->instagram }}"><i class="icofont-instagram"></i></a></li>
                                        <li><a target="_blank" href="{{ $speaker->linkedin }}"><i class="icofont-linkedin"></i></a></li>
                                        <li><a target="_blank" href="{{ $speaker->tiktok }}"><img src="{{ asset('frontend') }}/assets/images/tik.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                   {{-- <div class="col-lg-6 col-12">
                       <div class="speaker-item">
                           <div class="speaker-inner">
                               <div class="speaker-thumb">
                                   <img src="{{ asset('frontend') }}/assets/images/speakers/t1.png" alt="speaker">
                               </div>
                               <div class="speaker-content">
                                   <div class="spkr-content-title">
                                   <h5><a href="#">Victor</a> </h5>
                                       <p>Job Title</p>
                                   </div>
                                   <div class="spkr-content-details">
                                       <p>Completey conceplua high quality
                                           nice markes rather than long term
                                           impact human capital</p>
                                       <ul class="social-icons">
                                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                           <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                           <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                           <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                           <li><a href="#"><i class="icofont-behance"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-12">
                       <div class="speaker-item">
                           <div class="speaker-inner">
                               <div class="speaker-thumb">
                                   <img src="{{ asset('frontend') }}/assets/images/speakers/t3.png" alt="speaker">
                               </div>
                               <div class="speaker-content">
                                   <div class="spkr-content-title">
                                   <h5><a href="#">Victor</a> </h5>
                                       <p>Job Title</p>
                                   </div>
                                   <div class="spkr-content-details">
                                       <p>Completey conceplua high quality
                                           nice markes rather than long term
                                           impact human capital</p>
                                       <ul class="social-icons">
                                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                           <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                           <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                           <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                           <li><a href="#"><i class="icofont-behance"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-12">
                       <div class="speaker-item">
                           <div class="speaker-inner">
                               <div class="speaker-thumb">
                                   <img src="{{ asset('frontend') }}/assets/images/speakers/4.png" alt="speaker">
                               </div>
                               <div class="speaker-content">
                                   <div class="spkr-content-title">
                                   <h5><a href="#">Victor</a> </h5>
                                       <p>Job Title</p>
                                   </div>
                                   <div class="spkr-content-details">
                                       <p>Completey conceplua high quality
                                           nice markes rather than long term
                                           impact human capital</p>
                                       <ul class="social-icons">
                                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                           <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                           <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                           <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                           <li><a href="#"><i class="icofont-behance"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-12">
                       <div class="speaker-item">
                           <div class="speaker-inner">
                               <div class="speaker-thumb">
                                   <img src="{{ asset('frontend') }}/assets/images/speakers/5.png" alt="speaker">
                               </div>
                               <div class="speaker-content">
                                   <div class="spkr-content-title">
                                   <h5><a href="#">Victor</a> </h5>
                                       <p>Job Title</p>
                                   </div>
                                   <div class="spkr-content-details">
                                       <p>Completey conceplua high quality
                                           nice markes rather than long term
                                           impact human capital</p>
                                       <ul class="social-icons">
                                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                           <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                           <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                           <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                           <li><a href="#"><i class="icofont-behance"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-12">
                       <div class="speaker-item">
                           <div class="speaker-inner">
                               <div class="speaker-thumb">
                                   <img src="{{ asset('frontend') }}/assets/images/speakers/7.png" alt="speaker">
                               </div>
                               <div class="speaker-content">
                                   <div class="spkr-content-title">
                                   <h5><a href="#">Victor</a> </h5>
                                       <p>Job Title</p>
                                   </div>
                                   <div class="spkr-content-details">
                                       <p>Completey conceplua high quality
                                           nice markes rather than long term
                                           impact human capital</p>
                                       <ul class="social-icons">
                                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                           <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                           <li><a href="#"><i class="icofont-dribble"></i></a></li>
                                           <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                           <li><a href="#"><i class="icofont-behance"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div> --}}
               </div>
               <div class="download-button text-center mt-5">
                   {{-- <a href="{{ route('speakers') }}" class="lab-btn">All Speakers</a> --}}
               </div>
           </div>
       </div>
   </section>
   <!-- Speakers section end here -->
