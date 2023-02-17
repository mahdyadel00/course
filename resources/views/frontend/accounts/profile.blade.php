@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $user->name }}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    {{-- <li><a href="{{ route('speakers.index') }}">Profile</a></li> --}}
                    <li><a class="active">Profile Details</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    {{-- //message --}}
    @include('frontend.layouts.session')
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
                                        @if ($user->image == 'mahdy.png' || $user->image == null)
                                            <img src="{{ asset('frontend/assets/images/user.jpg') }}" alt="scholar" />
                                        @else
                                            <img src="{{ asset($user->image) }}" alt="scholar" />
                                        @endif
                                    </div>
                                    {{-- <div>
                                        <span class="d-inline-block">Change Password</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <div>
                                    <ul class="user-info" id="info">
                                        <li><Strong>Name:</Strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                                        <li><Strong>Email:</Strong> {{ $user->email }}</li>
                                        <li><Strong>Phone:</Strong> {{ $user->phone }}</li>
                                        <li><Strong>Country:</Strong> {{ $user->country ? $user->country->name : '' }}</li>
                                        <li><Strong>City:</Strong> {{ $user->city ? $user->city->name : '' }}</li>
                                        <li><Strong>Address:</Strong> {{ $user->address }}</li>
                                        <li><Strong>Birth Date:</Strong> {{ $user->birthdate }}</li>
                                        <li><Strong>Education:</Strong> {{ $user->education }}</li>
                                        <li><Strong>Marketing Fields:</Strong> {{ $user->education }}</li>
                                        <li><Strong>Qulification:</Strong> {{ $user->qulification }}</li>
                                        <li><Strong>English:</Strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                                        <li><Strong>Name:</Strong> {{ $user->first_name }} {{ $user->last_name }}</li>
                                    </ul>
                                    <button class="edit-btn lab-btn " id="btn">Edit</button>
                                </div>
                                <form id="user-form" action="{{ route('profile.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" value="{{ $user->first_name }}"
                                            class="form-control" placeholder="first name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" value="{{ $user->last_name }}"
                                            class="form-control" placeholder="last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}"
                                            class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $user->phone }}"
                                            class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country_id" id="country_id" class="form-control fc-datepicker">
                                            <option disabled value="0">Select Country Name</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    {{ $user->country_id == $country->id ? 'selected' : '' }}>
                                                    {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <select name="city_id" id="city_id" class="form-control fc-datepicker">
                                            <option disabled selected value="">Select City Name</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ $user->city_id == $city->id ? 'selected' : '' }}>
                                                    {{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{ $user->address }}"
                                            class="form-control" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <input type="date" name="birthdate" value="{{ $user->birthdate }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Education</label>
                                        <input type="text" name="education" value="{{ $user->education }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        @foreach ($marketings as $marketing)
                                            @php
                                                if (in_array($marketing->id, $user_marketings)) {
                                                    $marketing_checked = true;
                                                } else {
                                                    $marketing_checked = false;
                                                }
                                            @endphp
                                            <input class="fc-datepicker" type="checkbox" name="marketing_id[]"
                                                value="{{ $marketing->id }}"
                                                {{ $marketing_checked == true ? 'checked' : '' }}>{{ $marketing->title }}
                                                <br>
                                        @endforeach
                                        </select>
                                        @error('marketing_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Other Fields</label>
                                        <textarea class="form-control" name="" id=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Qulification</label>
                                        <textarea class="form-control" value="{{ $user->qulification }}" name="" id=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>English</label>
                                        <select class="form-control modal-title" name="english">
                                            <option value="1" {{ $user->english == 1 ? 'selected' : '' }}>Elementary
                                            </option>
                                            <option value="2" {{ $user->english == 2 ? 'selected' : '' }}>
                                                Intermediate
                                            </option>
                                            <option value="3" {{ $user->english == 3 ? 'selected' : '' }}>Advanced
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @if ($user->image == 'mahdy.png' || $user->image == null)
                                            <img src="{{ asset('frontend/assets/images/user.jpg') }}" alt="scholar"
                                                height="50px" width="100px" />
                                        @else
                                            <img src="{{ asset($user->image) }}" alt="scholar" height="100px"
                                                width="100px" />
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="file" class="form-control modal-title" name='identy'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @if ($user->identy == null || $user->identy == 'identy.img')
                                            <img src="{{ asset('frontend/assets/images/identity.png') }}" alt="scholar"
                                                height="50px" width="100px" />
                                        @else
                                            <img src="{{ asset($user->identy) }}" alt="scholar" height="100px"
                                                width="100px" />
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>CV</label>
                                        <input type="file" class="form-control modal-title" name='cv'
                                            accept="application/pdf">
                                        <a href="{{ route('profile.download', $user->id) }}" style="margin-top: 20px">
                                            @if (!$user->cv == null)
                                                <i class="fas fa-download">Dwonload CV</i>
                                            @endif
                                        </a>
                                    </div>
                                    <hr>
                                    {{-- <div class="form-group">
                                        <label>New Password</label>
                                        <input type="text" class="form-control" placeholder="new password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="text" class="form-control" placeholder="Confirm New Password">
                                    </div> --}}
                                    <div class="form-group" style="margin-top: 20px;">
                                        <button type="submit" class="lab-btn">
                                            <span>Update Profile</span>
                                        </button>
                                        <button id="close-btn" class="lab-btn">
                                            <span>Close</span>
                                        </button>
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
