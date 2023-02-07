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
                                    <p>{{ $speaker->personal_info  }}</p>
                                    <ul class="social-icons">
                                        <li><a href="{{ $speaker->twitter }}"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="{{ $speaker->instgram }}"><i class="icofont-instagram"></i></a></li>
                                         <li>
                                            <a href="{{ $speaker->tiktok }}" class="tiktok">
                                                <img src="{{ asset('frontend') }}/assets/images/tik.png" alt="">
                                            </a>
                                        </li>
                                        <li><a href="{{ $speaker->vimo }}"><i class="icofont-vimeo"></i></a></li>
                                        <li><a href="{{ $speaker->behance }}"><i class="icofont-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               </div>
               <div class="download-button text-center mt-5">
                   {{-- <a href="{{ route('speakers') }}" class="lab-btn">All Speakers</a> --}}
               </div>
           </div>
       </div>
   </section>
   <!-- Speakers section end here -->
