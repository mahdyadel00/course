@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Course</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.courses.index') }}">
                            <i class="fa fa-plus">Edit Course</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.courses.update', [$course->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>Title One</label>
                                        <input class="form-control fc-datepicker" name="title"
                                            value="{{ $course->title }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Description One</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description" id="description" cols="30" rows="10">{{ $course->description }}</textarea>
                                    </div>
                                    {{-- //image one --}}
                                    <div class="col">
                                        <label>Image One</label>
                                        <input type="file" name="image" class="form-control fc-datepicker">
                                        <br>
                                        <img src="{{ $course->image }}" width="100px" height="100px" alt="">
                                    </div>
                                    <div class="col">
                                        <label>Title Two</label>
                                        <input class="form-control fc-datepicker" name="title_1"
                                            value="{{ $course->title_1 }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Description Two</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description_1" id="description_1" cols="30"
                                            rows="10">{{ $course->description_1 }}</textarea>
                                    </div>
                                    {{-- //image two --}}
                                    <div class="col">
                                        <label>Image Two</label>
                                        <input type="file" name="image_1" class="form-control fc-datepicker">
                                        <br>
                                        <img src="{{ $course->image_1 }}" width="100px" height="100px" alt="">
                                    </div>
                                    <div class="col">
                                        <label>Title Three</label>
                                        <input class="form-control fc-datepicker" name="title_2"
                                            value="{{ $course->title_2 }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Description Three</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description_2" id="description_2" cols="30"
                                            rows="10">{{ $course->description_2 }}</textarea>
                                    </div>
                                    {{-- //file_course --}}
                                    <div class="col">
                                        <label>File Course</label>
                                        <input type="file" name="file_course" class="form-control fc-datepicker">
                                        <br>
                                        <a href="{{ route('admin.courses.download' , $course->course_file) }}" target="_blank">Download File</a>
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit Course</button>
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
