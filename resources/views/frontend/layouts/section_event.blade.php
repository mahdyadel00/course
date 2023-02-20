  <!-- ===== Event Gift start here  ==== -->
  <section class="event-gift-section padding-tb padding-b bg-image">
    <div class="container">
        <div class="row flex-lg-row-reverse">
            <div class="col-lg-6 col-12">
                <div class="section-header">
                    <h2>Conference Gifts</h2>
                    <p>Our Encouragment Gifts For You</p>
                </div>
                <div class="section-wrapper">
                    <div class="gift-content">
                        <p>
                        In appreciation of your endeavor to develop yourself, and to encourage you, GMC offers some valuable gifts such as:
                        </p>
                        <ul class="gift-list">
                            <li class="gift-item">{!! $gifit->description !!}</li>
                        </ul>
                        <div class="register-button">
                            <a href="{{ route('register.show') }}" class="lab-btn"><span>Register Now</span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image-part">
                    <img src="{{ asset($gifit->image) }}" alt="gift-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== Event Gift end here  ==== -->
