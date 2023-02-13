@extends('frontend.layouts.master')
<?php
$setting = App\Models\Settings::first();
?>
@section('content')
    <!--Contact Area S t a r t-->
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Contact us via mail</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a class="active">Contact us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    {{-- //message --}}
    @include('frontend.layouts.session')
    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>Don't Be A Stranger Just Say Hello.</h4>
                                <form action="{{ route('contacts.store') }}" method="POST" id="commentform"
                                    class="comment-form">
                                    @csrf
                                    <input type="text" name="name" class="" placeholder="Name*">
                                    <input type="email" name="email" class="" placeholder="Email*">
                                    <input type="text" name="number" class="" placeholder="Number*">
                                    <input type="text" name="subject" class="" placeholder="Subject*">
                                    <textarea name="message" id="role" cols="30" rows="9" placeholder="Message*"></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>Send Our Message</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>Get Information</h5>
                                <p>Our Contact information Details and
                                    Follow us on social media</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/03.png"
                                                alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Office Address</span>
                                            <p>{{ $setting->address }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/01.png"
                                                alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Phone Number</span>
                                            <p>{{ $setting->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{ asset('frontend') }}/assets/images/footer/footer-top/02.png"
                                                alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Send Mail</span>
                                            <p>{{ $setting->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <!-- <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.227736753981!2d90.38698831452395!3d23.739256984594892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sCodexCoder!5e0!3m2!1sbn!2sbd!4v1610134370994!5m2!1sbn!2sbd"
                                        allowfullscreen=""></iframe> -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.262964085923!2d31.361119!3d31.0467782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35e19c8a157da2c6!2sAlHawwar%20Club!5e0!3m2!1sen!2seg!4v1673954967259!5m2!1sen!2seg"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us Section ENding Here -->
@endsection

@push('js')
    <script>
        $('body').on('submit', '#add-form', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('action');
                    $.ajax({
                            url: url,
                            method: "post",
                            data: new FormData(this),
                            dataType: 'json',
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (response == 'success') {
                                    new Noty({
                                        type: 'success',
                                        layout: 'topRight',
                                        text: "{{ 'Saved successfully' }}",
                                        timeout: 2000,
                                        killer: true
                                    }).show();

                                },
                            });
                    });
    </script>
@endpush
