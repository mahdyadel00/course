@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Lucturers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.lucturers.index') }}">
                            <i class="fa fa-plus">Edit Lucturer</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.lucturers.update', [$lucturer->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name" required
                                            value="{{ $lucturer->name }}">
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email"
                                            value="{{ $lucturer->email }}">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number"
                                            value="{{ $lucturer->phone }}">
                                    </div>
                                    <div class="col">
                                        <label>Job Title</label>
                                        <input class="form-control" name="job_title" required value="{{ $lucturer->job_title }}">
                                    </div>
                                    <div class="col">
                                        <label>Personal Statment</label>
                                        <textarea class="form-control ckeditor" name="personal_info" required>{{ $lucturer->personal_info }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Description</label>
                                        <textarea class="form-control ckeditor" name="description" required>{{ $lucturer->description }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address">{{ $lucturer->address }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control"
                                            value="{{ $lucturer->website }}">
                                    </div>
                                    <div class="col">
                                        <label>Facebook</label>
                                        <input class="form-control" name="facebook" value="{{ $lucturer->facebook }}">
                                    </div>
                                    <div class="col">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control"
                                            value="{{ $lucturer->twitter }}">
                                    </div>
                                    <div class="col">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube" class="form-control"
                                            value="{{ $lucturer->youtube }}">
                                    </div>
                                    <div class="col">
                                        <label>Behance</label>
                                        <input type="text" name="behance" class="form-control"
                                            value="{{ $lucturer->behance }}">
                                    </div>
                                    <div class="col">
                                        <label>Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control"
                                            value="{{ $lucturer->linkedin }}">
                                    </div>
                                    <div class="col">
                                        <label>Tiktok</label>
                                        <input type="text" name="tiktok" class="form-control"
                                            value="{{ $lucturer->tiktok }}">
                                    </div>
                                    <div class="col">
                                        <label>Vimeo</label>
                                        <input type="text" name="vimeo" class="form-control"
                                            value="{{ $lucturer->vimeo }}">
                                    </div>
                                    <div class="col">
                                        <label>Instgram</label>
                                        <input type="text" name="instagram" class="form-control"
                                            value="{{ $lucturer->instagram }}">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($lucturer->image) }}" alt="image" width="100px"
                                            height="100px">
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center col">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-top: 25px;padding: 10px 100px;">Update Lucturer</button>
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
