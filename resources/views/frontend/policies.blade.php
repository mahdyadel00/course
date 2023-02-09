@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $speaker->name }}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('speakers.index') }}">Policies</a></li>
                    <li><a class="active">Policies-Details</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Scholar single section start Here -->
    <div class="scholar-single-section padding-tb padding-b">
        <div class="container">
            <div class="section-wrapper rounded">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="scholar-left">
                                <div class="scholar-single-item">
                                    <div class="scholar-single-thumb" style="width: 330px; height: 363px;">
                                        <img src="{{ asset($speaker->image) }}" alt="scholar" />
                                    </div>
                                    <div>
                                        <span class="d-inline-block">Details</span>
                                        <p>{!! $speaker->personal_info !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <form>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="first name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file"  name="image" placeholder="Enter Your Image">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="text" class="form-control" placeholder="new password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="text" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scholar single section end Here -->
@endsection
