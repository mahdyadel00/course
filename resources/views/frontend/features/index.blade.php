@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Features</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a class="active">Features</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- ==========About Section start Here========== -->
    <section class="about-section padding-tb padding-b" id="section-video">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 d-none">
                    <div class="about-image">
                        <img src="{{ asset('frontend') }}/assets/images/about/01.jpg" alt="about image">
                        <a href="https://www.youtube.com/embed/SP3yyrboTno" class="play-btn" data-rel="lightcase">
                            <i class="icofont-ui-play"></i>
                            <span class="pluse_2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>Big Marketing Meetup</h2>
                        <p>About "GMC" Conference 2023</p>
                    </div>
                    <div class="section-wrapper text-center">
                        <p>The Conference aims to gather pioneers of marketing and entrepreneurs in Egypt and some
                            countries
                            of the world to transfer their marketing experiences, and to follow up on the most important
                            new marketing methods after the presence of artificial intelligence and technological
                            change.
                            <br>
                            <br>
                            Knowing the importance of marketing in the development of companies and countries, helping
                            youth in obtaining jobs in the field of marketing and freelancing, spreading awareness that
                            marketing is a science that should be studied and not just propaganda stations or social
                            media tools.
                            <br>
                            <br>
                            Providing training opportunities and workshops to qualify youth for the market labor.
                            <br>
                            <br>
                            Knowing how does the power of marketing affect the success of companies and individuals.
                            <br>
                            <br>
                            Helping entrepreneurs follow the recent marketing methods in the largest companies, and how
                            successful companies can effect on the economic conditions of the country.
                        </p>
                        <div class="about-btn-grp">
                            <a href="{{ route('register.show') }}" class="lab-btn "><span>Register Now</span> </a>
                        </div>

                    </div>
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                    <div class="section-header text-center" id="benefits">
                        <h2>Event Key Benefits</h2>
                        <p>About "GMC" Conference Features</p>

                    </div>
                    <div class="section-wrapper text-center">
                        <p>
                            For those attending the event:
                            Understand the actual marketing methods in the current market by colliding or
                            friction with the success stories of actual companies

                            <br> An opportunity to qualify for the market labour by understanding the mechanism
                            of
                            corporate marketing.

                            <br>Learn how to prepare for an interview and choosing the right scope that matches
                            your skills.

                            <br>Marketing materials for free. (Course – E-book)
                            As an Incentive from GEEXAR:
                            <br>
                            5 internship opportunities on real projects. (Two months)
                            <br>5 workshops for 25 students. (Every workshop lasts for a week)
                            <br> 10 opportunities to attend the first week of the course free.<br><br><br><br><br>
                         <span class="discount">50% Discount on
                         a marketing course.</span>
                        </p>
                        <div class="about-btn-grp">
                            <a href="{{ route('home') }}" class="lab-btn "><span>Course Details</span> </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                 <div class="section-header text-center">
                     <h2>Who To Attend</h2>
                     <p>About Conference's Audience</p>
                 </div>
                 <div class="section-wrapper text-center">
                     <p>
                         
                         Students interested in marketing
                         <br> Business owners and entrepreneurs who are responsible for business.
                        <br> All small and large business representatives.
                         <br> Freelancers CEOs and other senior leaders who manage large organizations.
                         <br> Who studies majors related to marketing or business as
                         <div class="ttt">
                            <div class="first">
                                <ul>
                                    <li>Marketing Plan</li>
                                    <li>Business</li>
                                    <li>Media Buyers</li>
                                    <li>Content Creators</li>
                                    <li>Copy Writers</li>
                                </ul>
                            </div>
                            <div class="second">
                                <ul>
                                    <li>Career Development</li>
                                    <li>Human Resourse</li>
                                    <li>Voice Over</li>
                                    <li>Video Editors</li>
                                    <li>Graphic Designers</li>
                                </ul>
                            </div>
                         </div>
                         
                         <!-- (voice over, graphic designers ,art directors, video editors, business, career development
                         coaches, content creators, copy writers, media buyers,....etc) -->

                     </p>
                 </div>
                </div>
            </div>
    </section>
    <!-- ==========About Section end Here========== -->

    <!-- ==========schedule Section start Here========== -->
    <section class="section section-lg bg-default text-center d-none">
        <div class="container">
            <div class="section-header text-center">
                <h2>Event Schedule plan</h2>
                <p>Conference Schedule.</p>
            </div>
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker"
                            href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"><span
                                class="nav-link-overlay"></span><span class="nav-link-cite">First Day</span><span
                                class="nav-link-title">February 2, 2023</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-purple-heart" href="#tabs-1-2"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span
                                class="nav-link-cite">Second Day</span><span class="nav-link-title">February 3,
                                2023</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-primary" href="#tabs-1-3"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span
                                class="nav-link-cite">Third Day</span><span class="nav-link-title">February 4,
                                2023</span></a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link nav-link-secodanry" href="#tabs-1-4"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span
                                class="nav-link-overlay"></span><span class="nav-link-cite">Fourth Day</span><span
                                class="nav-link-title">January 9, 2019</span></a></li> -->
                </ul>
                <!--Tab panes-->
                <div class="tab-content wow fadeIn">
                    <div class="tab-pane fade" id="tabs-1-1">
                        <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Startups.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Prof. Nabil
                                                                    Shalaby</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-onwkttkd"
                                    aria-labelledby="accordion1-card-head-hxapwahb" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hijijucp"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-lffuwxio"
                                            aria-controls="accordion1-card-body-lffuwxio" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-02-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">10:00 am to 11:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Wordpress
                                                                developement stages</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Abdelrahman
                                                                    Elsaudy.</span> - Lead
                                                                Developer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-lffuwxio"
                                    aria-labelledby="accordion1-card-head-hijijucp" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem!
                                            Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad
                                            idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus
                                            ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls
                                            superbe.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Content
                                                                Creation.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Marie
                                                                    Haddad.</span>
                                                                - Owner & Founder of The Ceas Agency | Digital
                                                                Marketer</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-qdqkcamp"
                                    aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Storytelling by
                                                                Design.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Ahmed Emad
                                                                    Eldin.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-qdqkcamp"
                                    aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Voice
                                                                Over.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Marina
                                                                    Bkheet.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-qdqkcamp"
                                    aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Copy
                                                                Writing.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Walid
                                                                    Taha.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-qdqkcamp"
                                    aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Meta Verse:
                                                                exploitation v opportunity.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Victor de la
                                                                    Fuente.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-qdqkcamp"
                                    aria-labelledby="accordion1-card-head-hpaxeker" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Schedule Simple-->
                            <div class="schedule-classic schedule-classic-simple">
                                <div class="schedule-classic-content">
                                    <div class="schedule-classic-img">
                                        <svg class="svg-icon-md svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#clock"></use>
                                        </svg>
                                    </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span
                                        class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                </div>
                            </div>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-fjfogjti"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-ivevyplo"
                                            aria-controls="accordion1-card-body-ivevyplo" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-04-58x58.jpg" alt=""
                                                                width="58" height="58" /></span><span
                                                            class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-05-58x58.jpg" alt=""
                                                                width="58" height="58" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Digital
                                                                Conference 2019 Introduction</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Kevin
                                                                    Martin</span>
                                                                - Supporter&nbsp;&nbsp;
                                                                .&nbsp;&nbsp; <span
                                                                    class="schedule-classic-author-name">Sarah
                                                                    Rose</span> -
                                                                Designer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion1-card-body-ivevyplo"
                                    aria-labelledby="accordion1-card-head-fjfogjti" data-parent="#accordion1"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus.
                                            Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori!
                                            Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga.
                                            Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-hmvqrcja"
                                            aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Evolution of
                                                                user interface in 2019</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Sara De
                                                                    Oliveira.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-hmvqrcja"
                                    aria-labelledby="accordion2-card-head-qqqtjoau" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-spnrcijv"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-shdhqwhj"
                                            aria-controls="accordion2-card-body-shdhqwhj" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-02-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">10:00 am to 11:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">English
                                                                Concepts in Marketing.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Mohamed
                                                                    Gomaa.</span> - Lead
                                                                Developer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-shdhqwhj"
                                    aria-labelledby="accordion2-card-head-spnrcijv" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem!
                                            Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad
                                            idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus
                                            ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls
                                            superbe.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Social Media
                                                                Influence Medical Field.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Elsherbiny
                                                                    Mohamed.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-eqwqapab"
                                    aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span class="schedule-classic-title heading-4">Ads
                                                                Songs.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Nasr Eldin
                                                                    Nagy.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-eqwqapab"
                                    aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Customer
                                                                Relationship.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Ramy
                                                                    Yaseen.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-eqwqapab"
                                    aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Media
                                                                Buying.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Eslam
                                                                    Salah.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-eqwqapab"
                                    aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span class="schedule-classic-title heading-4">How
                                                                to Make a
                                                                Trend.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Amir
                                                                    Abdelwahed.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-eqwqapab"
                                    aria-labelledby="accordion2-card-head-vrmbocua" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Schedule Simple-->
                            <div class="schedule-classic schedule-classic-simple">
                                <div class="schedule-classic-content">
                                    <div class="schedule-classic-img">
                                        <svg class="svg-icon-md svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#clock"></use>
                                        </svg>
                                    </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span
                                        class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                </div>
                            </div>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-oaoaxgky"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-kmmeejga"
                                            aria-controls="accordion2-card-body-kmmeejga" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-04-58x58.jpg" alt=""
                                                                width="58" height="58" /></span><span
                                                            class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-05-58x58.jpg" alt=""
                                                                width="58" height="58" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span class="schedule-classic-title heading-4">UI
                                                                /
                                                                UX.</span><span class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Kevin
                                                                    Martin</span>
                                                                - Supporter&nbsp;&nbsp;
                                                                .&nbsp;&nbsp; <span
                                                                    class="schedule-classic-author-name">Sarah
                                                                    Rose</span> -
                                                                Designer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion2-card-body-kmmeejga"
                                    aria-labelledby="accordion2-card-head-oaoaxgky" data-parent="#accordion2"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus.
                                            Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori!
                                            Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga.
                                            Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-isrhhksp"
                                            aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-02-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">10:00 am to 11:00
                                                                am</span><span class="schedule-classic-title heading-4">UI
                                                                /
                                                                UX.</span><span class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">speaker.</span> -
                                                                Lead
                                                                Developer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-isrhhksp"
                                    aria-labelledby="accordion3-card-head-twpndpre" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem!
                                            Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad
                                            idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus
                                            ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls
                                            superbe.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-spqeafxt"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-nxplbtnu"
                                            aria-controls="accordion3-card-body-nxplbtnu" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">SEO.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Oliga.</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-nxplbtnu"
                                    aria-labelledby="accordion3-card-head-spqeafxt" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Research
                                                                Marketing.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Amir
                                                                    Hassan.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span class="schedule-classic-title heading-4">How
                                                                to Make
                                                                Hero Content.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Yasmina.</span>
                                                                - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Influence of
                                                                Content on Marketing
                                                                Success.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Mohamed
                                                                    Taher.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Business
                                                                Development.</span><span class="schedule-classic-author">by
                                                                <span class="schedule-classic-author-name">Mohamed
                                                                    Eltohamy.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">How to Select
                                                                Your Career.</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Walid
                                                                    Rabeea.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-rxyiuqjb"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-qpeygaxh"
                                            aria-controls="accordion3-card-body-qpeygaxh" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Digital
                                                                Conference 2019 Introduction</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Ahmed
                                                                    Thabit.</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-qpeygaxh"
                                    aria-labelledby="accordion3-card-head-rxyiuqjb" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Schedule Simple-->
                            <div class="schedule-classic schedule-classic-simple">
                                <div class="schedule-classic-content">
                                    <div class="schedule-classic-img">
                                        <svg class="svg-icon-md svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#clock"></use>
                                        </svg>
                                    </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span
                                        class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                </div>
                            </div>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-clrhkrpn"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-jomsxgka"
                                            aria-controls="accordion3-card-body-jomsxgka" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-04-58x58.jpg" alt=""
                                                                width="58" height="58" /></span><span
                                                            class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-05-58x58.jpg" alt=""
                                                                width="58" height="58" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Digital
                                                                Conference 2019 Introduction</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Kevin
                                                                    Martin</span>
                                                                - Supporter&nbsp;&nbsp;
                                                                .&nbsp;&nbsp; <span
                                                                    class="schedule-classic-author-name">Sarah
                                                                    Rose</span> -
                                                                Designer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion3-card-body-jomsxgka"
                                    aria-labelledby="accordion3-card-head-clrhkrpn" data-parent="#accordion3"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus.
                                            Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori!
                                            Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga.
                                            Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="tabs-1-4">
                        <div class="card-group-custom card-group-corporate" id="accordion4" role="tablist"
                            aria-multiselectable="false">
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-ybgfluus"
                                            data-toggle="collapse" data-parent="#accordion4"
                                            href="#accordion4-card-body-vujqeaao"
                                            aria-controls="accordion4-card-body-vujqeaao" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-01-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">9:00 am to 10:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Digital
                                                                Conference 2019 Introduction</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Jessica
                                                                    Brown</span> - Co
                                                                Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-vujqeaao"
                                    aria-labelledby="accordion4-card-head-ybgfluus" data-parent="#accordion4"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss
                                            favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas
                                            vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad
                                            acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes
                                            fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-kkanjswy"
                                            data-toggle="collapse" data-parent="#accordion4"
                                            href="#accordion4-card-body-luhibwcd"
                                            aria-controls="accordion4-card-body-luhibwcd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-03-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Evolution of
                                                                user interface in 2019</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Manager</span>
                                                                - Co Founder</span></span></span></span></span></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-luhibwcd"
                                    aria-labelledby="accordion4-card-head-kkanjswy" data-parent="#accordion4"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour or
                                            randomised words which don't look even slightly believable. If you are going
                                            to use a passage randomised words which don't look even slightly believable.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-icjoexwh"
                                            data-toggle="collapse" data-parent="#accordion4"
                                            href="#accordion4-card-body-bjyiygqy"
                                            aria-controls="accordion4-card-body-bjyiygqy" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-02-122x122.jpg" alt=""
                                                                width="122" height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">10:00 am to 11:00
                                                                am</span><span
                                                                class="schedule-classic-title heading-4">Wordpress
                                                                developement stages</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Mike
                                                                    Hardson</span> - Lead
                                                                Developer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-bjyiygqy"
                                    aria-labelledby="accordion4-card-head-icjoexwh" data-parent="#accordion4"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem!
                                            Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad
                                            idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus
                                            ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls
                                            superbe.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="schedule-classic schedule-classic-simple">
                                <div class="schedule-classic-content">
                                    <div class="schedule-classic-img">
                                        <svg class="svg-icon-md svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#clock"></use>
                                        </svg>
                                    </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span
                                        class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                </div>
                            </div>
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-fccgfuhi"
                                            data-toggle="collapse" data-parent="#accordion4"
                                            href="#accordion4-card-body-utqsdqvx"
                                            aria-controls="accordion4-card-body-utqsdqvx" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-04-58x58.jpg" alt=""
                                                                width="58" height="58" /></span><span
                                                            class="schedule-classic-img"><img
                                                                src="{{ asset('frontend') }}/assets/images/schedule-05-58x58.jpg" alt=""
                                                                width="58" height="58" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content"><span
                                                                class="schedule-classic-time">11:00 am to 12:00
                                                                pm</span><span
                                                                class="schedule-classic-title heading-4">Digital
                                                                Conference 2019 Introduction</span><span
                                                                class="schedule-classic-author">by <span
                                                                    class="schedule-classic-author-name">Kevin
                                                                    Martin</span>
                                                                - Supporter&nbsp;&nbsp;
                                                                .&nbsp;&nbsp; <span
                                                                    class="schedule-classic-author-name">Sarah
                                                                    Rose</span> -
                                                                Designer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-utqsdqvx"
                                    aria-labelledby="accordion4-card-head-fccgfuhi" data-parent="#accordion4"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus.
                                            Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori!
                                            Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga.
                                            Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.
                                        </p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States
                                                    of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========schedule Section end Here========== -->
@endsection
