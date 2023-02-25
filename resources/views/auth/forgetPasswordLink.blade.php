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
                <form class="account-form" action="{{ route('reset.password.post') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span> Reset Password</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->
@endsection
