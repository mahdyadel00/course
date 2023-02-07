@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Edit User</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.users.update', [$user->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name </label>
                                        <input class="form-control fc-datepicker" name="first_name" value="{{ $user->first_name }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label> Last Name </label>
                                        <input class="form-control fc-datepicker" name="last_name" value="{{ $user->last_name }}"
                                            type="text">
                                    </div>
                                        <label> Name </label>
                                        <input class="form-control fc-datepicker" name="name" value="{{ $user->name }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label> Email</label>
                                        <input class="form-control fc-datepicker" name="email" value="{{ $user->email }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" value="{{ $user->phone }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Birthdate</label>
                                        <input class="form-control fc-datepicker" name="birthdate" value="{{ $user->birthdate }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control fc-datepicker" name="address" value="{{ $user->address }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Education</label>
                                        <input class="form-control fc-datepicker" name="education" value="{{ $user->education }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Qulification</label>
                                        <input class="form-control fc-datepicker" name="qulification" value="{{ $user->qulification }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>English</label>
                                        <input class="form-control fc-datepicker" name="english" value="{{ $user->english }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Fill Survy</label>
                                        <input class="form-control fc-datepicker" name="fill_survy" value="{{ $user->fill_survy }}"
                                            type="checkbox">
                                    </div>
                                    <div class="col">
                                        <label>Policies</label>
                                        <input class="form-control fc-datepicker" name="policies" value="{{ $user->policies }}"
                                            type="checkbox">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                        <img src="{{ asset($user->image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col-md-12">
                                        <label class="infoTitle">@lang('site.status')</label>
                                        <input type="checkbox" value="1" {{ $user->status == 1 ? 'checked' : '' }}
                                            name="status">
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Edit</button>
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
