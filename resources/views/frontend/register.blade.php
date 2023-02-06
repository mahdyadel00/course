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

    <!-- Registration section start Here -->
    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Register Now</h3>
                <form class="account-form" action="{{ route('register.do') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="date" placeholder="Date Of Birth" name="birthdate">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="policies">Fill Survey</label>
                        <input type="checkbox" name="fill_survy">
                    </div>
                    <div class="form-group">
                        <label for="policies">Policies</label>
                        <input type="checkbox" name="policies">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration section end Here -->
@endsection
