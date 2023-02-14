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
                    <li><a class="active">Profile-Details</a></li>
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
                                        @if ($user->image == 'mahdy.png'||$user->image == null)
                                            <img src="{{ asset('frontend/assets/images/user.jpg') }}" alt="scholar" />
                                        @else
                                            <img src="{{ asset($user->image) }}" alt="scholar" />
                                        @endif
                                    </div>
                                    <div>
                                        <span class="d-inline-block">Change Password</span>
                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Launch demo modal
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scholar-right">
                                <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
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
                                            class="form-control" placeholder="address">
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
                                        <label>Select</label>
                                        <select name="fields" id="" class="form-control">
                                            <option value="digital_marketing">Digital Marketing</option>
                                            <option value="graphic_design">Graphic Design</option>
                                            <option value="market_research">Market Research</option>
                                            <option value="seo">ESO</option>
                                            <option value="voice_over">Voice Over</option>
                                            <option value="google_ads">Google Ads</option>
                                            <option value="customer_relationship">Customer Relationship</option>
                                            <option value="customer_behavior">Customer Behavior</option>
                                            <option value="brand_strategy">Brand Strategy</option>
                                            <option value="personal_branding">Personal Branding</option>
                                            <option value="media_buying">Media Buying</option>
                                            <option value="business_strategy">Business Strategy</option>
                                            <option value="marketing_plan">Marketing Plan</option>
                                            <option value="ui_ux">UI/UX</option>
                                            <option value="sem">SEM</option>
                                            <option value="sales">Sales</option>
                                            <option value="content_creation">Content Creation</option>
                                            <option value="copy_writing">Copy Writing</option>
                                            <option value="photography">Photography</option>
                                            <option value="videography">Videography</option>
                                            <option value="b2b_marketing">B2B Marketing</option>
                                            <option value="pr">PR</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Qulification</label>
                                        <input type="text" name="qulification" value="{{ $user->qulification }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>English</label>
                                        <select class="form-control modal-title" name="english">
                                            <option value="1" {{ $user->english == 1 ? 'selected' : '' }}>Elementary
                                            </option>
                                            <option value="2" {{ $user->english == 2 ? 'selected' : '' }}>Intermediate
                                            </option>
                                            <option value="3" {{ $user->english == 3 ? 'selected' : '' }}>Advanced
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                            @if ($user->image == 'mahdy.png'||$user->image == null)
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
                                        @if ($user->identy ==  null || $user->identy == 'identy.img')
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
                                    <div class="form-group" style="text-align: center;margin-top: 20px;">
                                        <button type="submit" class="lab-btn">
                                            <span>Update Profile</span>
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
