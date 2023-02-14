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
                    <li><a class="active">Registration</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    {{-- session --}}
    {{-- //message --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session()->get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Registration section start Here -->
    <div class="login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">

                <h3 class="title">Register Now</h3>
                <form class="account-form" action="{{ route('register.do') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="date" placeholder="Date Of Birth" name="birthdate">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload CV (Optional)</label>
                        <input type="file" name="cv" placeholder="Enter Your CV">
                    </div>
                    <div class="text-start">
                        {{-- <label for="policies"></label> --}}
                        <input type="checkbox" name="fill_survy">Fill Survey <span>(Git 1 ticket free from the same type
                            when booking)</span>
                    </div>
                    <div class="text-start">
                        <input type="checkbox" name="policies" required>I Accept <a
                            href="{{ route('polices.index') }}">privacy policy</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="{{ route('login.show') }}">Login</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration section end Here -->
@endsection
