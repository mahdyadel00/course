@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Settings</h6>
                </div>
                {{-- //message --}}
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.settings.update') }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>English Name </label>
                                        <input class="form-control fc-datepicker" type="text" name="title_en"
                                            value="{{ $setting->title_en }}">
                                        @error('title_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Arabic Name</label>
                                        <input class="form-control fc-datepicker" name="title_ar"
                                            value="{{ $setting ? $setting->title_ar : '' }}" type="text">
                                        @error('title_ar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email"
                                            value="{{ $setting ? $setting->email : '' }}" type="text">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone"
                                            value="{{ $setting ? $setting->phone : '' }}" type="text">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control fc-datepicker" name="address"
                                            value="{{ $setting ? $setting->address : '' }}" type="text">
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Start_from</label>
                                        <input class="form-control fc-datepicker" name="start_from"
                                            value="{{ $setting ? $setting->start_from : '' }}" type="time">
                                        @error('start_from')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>End_at</label>
                                        <input class="form-control fc-datepicker" name="end_at"
                                            value="{{ $setting ? $setting->end_at : '' }}" type="time">
                                        @error('end_at')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Facebook_link</label>
                                        <input class="form-control fc-datepicker" name="facebook_link"
                                            value="{{ $setting ? $setting->facebook_link : '' }}" type="text">
                                        @error('facebook_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Twitter</label>
                                        <input class="form-control fc-datepicker" name="twitter_link"
                                            value="{{ $setting->twitter_link }}" type="text">
                                        @error('twitter_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>YouTube</label>
                                        <input class="form-control fc-datepicker" name="youtube_link"
                                            value="{{ $setting ? $setting->youtube_link : '' }}" type="text">
                                        @error('youtube_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Linkedin</label>
                                        <input class="form-control fc-datepicker" name="linkedin_link"
                                            value="{{ $setting ? $setting->linkedin_link : '' }}" type="text">
                                        @error('linkedin_link')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Logo</label>
                                        <input type="file" class="form-control modal-title" name='logo'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('logo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <img src="{{ asset($setting->logo) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label> Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <img src="{{ asset($setting->image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label>Main Image</label>
                                        <input type="file" class="form-control modal-title" name='main_image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('main_image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <img src="{{ asset($setting->main_image) }}" height="100px" width="100px" />
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center col">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-top: 25px;padding: 10px 100px;">Update Settings</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    </div>
    <!-- row closed -->
    </div>
    </div>
    </div>
    </div>
@endsection
