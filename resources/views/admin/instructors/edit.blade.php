@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>instructors</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.instructors.index') }}">
                            <i class="fa fa-plus">Edit Instructor</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.instructors.update', [$Instructor->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name" required
                                            value="{{ $Instructor->name }}">
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email"
                                            value="{{ $Instructor->email }}">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number"
                                            value="{{ $Instructor->phone }}">
                                    </div>
                                    <div class="col">
                                        <label>Job Title</label>
                                        <input class="form-control" name="job_title" required value="{{ $Instructor->job_title }}">
                                    </div>
                                    <div class="col">
                                        <label>Personal Statment</label>
                                        <textarea class="form-control ckeditor" name="personal_info" required>{{ $Instructor->personal_info }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Description</label>
                                        <textarea class="form-control ckeditor" name="description" required>{{ $Instructor->description }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address">{{ $Instructor->address }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control"
                                            value="{{ $Instructor->website }}">
                                    </div>
                                    <div class="col">
                                        <label>Facebook</label>
                                        <input class="form-control" name="facebook" value="{{ $Instructor->facebook }}">
                                    </div>
                                    <div class="col">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control"
                                            value="{{ $Instructor->twitter }}">
                                    </div>
                                    <div class="col">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube" class="form-control"
                                            value="{{ $Instructor->youtube }}">
                                    </div>
                                    <div class="col">
                                        <label>Behance</label>
                                        <input type="text" name="behance" class="form-control"
                                            value="{{ $Instructor->behance }}">
                                    </div>
                                    <div class="col">
                                        <label>Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control"
                                            value="{{ $Instructor->linkedin }}">
                                    </div>
                                    <div class="col">
                                        <label>Tiktok</label>
                                        <input type="text" name="tiktok" class="form-control"
                                            value="{{ $Instructor->tiktok }}">
                                    </div>
                                    <div class="col">
                                        <label>Vimeo</label>
                                        <input type="text" name="vimeo" class="form-control"
                                            value="{{ $Instructor->vimeo }}">
                                    </div>
                                    <div class="col">
                                        <label>Instgram</label>
                                        <input type="text" name="instagram" class="form-control"
                                            value="{{ $Instructor->instagram }}">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($Instructor->image) }}" alt="image" width="100px"
                                            height="100px">
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center col">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-top: 25px;padding: 10px 100px;">Update Instructor</button>
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
