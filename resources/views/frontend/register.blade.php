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
                <form class="account-form" action="{{ route('register.do') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="name" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="date" placeholder="Date Of Birth" name="birthdate">
                        @error('birthdate')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email" required>
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
                        <select name="country" class="form-control m-bot15" required>
                            @if($countries->count() > 0)
                                <option disabled selected value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="city" class="form-control m-bot15" required>
                            @if($cities->count() > 0)
                                <option disabled selected value="">Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('city')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address" name="address">
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload CV (Optional)</label>
                        <input type="file" name="cv" placeholder="Enter Your CV">
                        @error('cv')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start">
                        <input type="checkbox" name="fill_survy">Fill Survey <span>(Get one free ticket)</span>
                        {{-- <input type="checkbox" name="fill_survy">Fill Survey <span>(Git 1 ticket free from the same type
                            when booking)</span> --}}
                        @error('fill_survy')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start">
                        <input type="checkbox" name="policies" required>I Accept <a
                            href="{{ route('polices.index') }}">Terms and Conditions</a>
                        @error('policies')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="d-block lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a
                            href="{{ route('login.show') }}">Login</a></span>

                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="{{ route('facebook.login') }}" class="facebook"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('google.login') }}" class="google"><i class="fab fa-google"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('instgram.login') }}" class="instagram"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('linkedin.login') }}" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        {{-- <li>
                            <a href="http://pinterest.com/h" class="pinterest"><i class="fab fa-pinterest"></i></a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration section end Here -->
@endsection
