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
                                    <div>
                                        @if ($user->name)
                                            <h3 class="d-inline-block">Qr Code</h3><br><br><br>
                                            {!! QrCode::size(200)->generate($user->name) !!}
                                            {{-- <img src="data:image/png;base64,{{ base64_encode(SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->format('png')->merge(public_path('frontend/assets/images/logo.png'),.3, true)->generate('Make me into a QrCode!') ) }}"> --}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <div>
                                    <ul class="user-info" id="info">
                                        @if ($user->name)
                                            <li><Strong>Name:</Strong> {{ $user->name }}</li>
                                        @endif
                                        @if ($user->email)
                                            <li><Strong>Email:</Strong> {{ $user->email }}</li>
                                        @endif
                                        @if ($user->phone)
                                            <li><Strong>Phone:</Strong> {{ $user->phone }}</li>
                                        @endif
                                        @if ($user->country)
                                            <li><Strong>Country:</Strong> {{ $user->country ? $user->country->name : '' }}
                                            </li>
                                        @endif
                                        @if ($user->city)
                                            <li><Strong>City:</Strong> {{ $user->city ? $user->city->name : '' }}</li>
                                        @endif
                                        @if ($user->address)
                                            <li><Strong>Address:</Strong> {{ $user->address }}</li>
                                        @endif
                                        @if ($user->birthdate)
                                            <li><Strong>Birth Date:</Strong> {{ $user->birthdate }}</li>
                                        @endif
                                        @if ($user->education)
                                            <li><Strong>Education:</Strong> {{ $user->education }}</li>
                                        @endif
                                        @if ($user->qulification)
                                            <li><Strong>Marketing Fields:</Strong> {{ $user->education }}</li>
                                        @endif
                                        @if ($user->qulification)
                                            <li><Strong>Qulification:</Strong> {{ $user->qulification }}</li>
                                        @endif
                                        @if ($user->english)
                                            <li><Strong>English:</Strong> {{ $user->english }}</li>
                                        @endif
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
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" value="{{ $user->last_name }}"
                                            class="form-control" placeholder="last name">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}"
                                            class="form-control" placeholder="Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- new password --}}
                                    {{-- <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="password"
                                            value="{{ $user->password }}">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    {{-- confirm password --}}
                                    {{-- <div class="form-group">
                                        <label>Confirmation Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="password" value="{{ $user->password }}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $user->phone }}"
                                            class="form-control" placeholder="Phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <input type="date" name="birthdate" value="{{ $user->birthdate }}"
                                            class="form-control">
                                        @error('birthdate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Education</label>
                                        <input type="text" name="education" value="{{ $user->education }}"
                                            class="form-control">
                                        @error('education')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Qulification</label>
                                        <input class="form-control" value="{{ $user->qulification }}" name="qulification">
                                        @error('qulification')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                        <label>English</label>
                                        <select class="form-control modal-title" name="english">
                                            <option disabled selected value="">Select English Level</option>
                                            <option value="1" {{ $user->english == 'Elementary' ? 'selected' : '' }}>
                                                Elementary
                                            </option>
                                            <option value="2"
                                                {{ $user->english == 'Intermediate' ? 'selected' : '' }}>
                                                Intermediate
                                            </option>
                                            <option value="3" {{ $user->english == 'Advanced' ? 'selected' : '' }}>
                                                Advanced
                                            </option>
                                        </select>
                                        @error('english')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                        @error('identy')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                        @error('cv')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr>
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
