@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Registration Page</h4>
                <ul class="lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a class="active">Registration</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    {{-- //message --}}
    @include('frontend.layouts.session')
    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
                <form class="account-form" action="{{ route('login.do') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="#">Forget Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Submit Now</span></button>
                    </div>
                </form>
                {{-- <div class="account-bottom">
                    <span class="d-block cate pt-10">Don’t Have any Account? <a href="{{ route('register.show') }}"> Sign
                            Up</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="{{ route('facebook.login') }}" class="facebook"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="http://twitter.com/h" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="http://linkedin.com/h" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="http://instgram.com/h" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="http://pinterest.com/h" class="pinterest"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->
@endsection
