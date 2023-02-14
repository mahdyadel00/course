@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Features</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.features.index') }}">
                            <i class="fa fa-plus">Edit Feature</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.features.update') }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Title </label>
                                        <input class="form-control fc-datepicker" name="title"
                                            value="{{ $feature->title }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Description </label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description" id="desritpion" cols="30" rows="10">{!! $feature->description !!}</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="title_1">Title 1</label>
                                        <input type="text" class="form-control" id="title_1" name="title_1"
                                            value="{{ $feature->title_1 }}">
                                    </div>
                                    <div class="col">
                                        <label for="description_1">Description 2</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description_1" id="description_1" cols="30"
                                            rows="10">{!! $feature->description_1 !!}</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="title_2">Title 2</label>
                                        <input type="text" class="form-control" id="title_2" name="title_2"
                                            value="{{ $feature->title_2 }}">
                                    </div>
                                    <div class="col">
                                        <label for="description_2">Description 2</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description_2" id="description_2" cols="30"
                                            rows="10">{!! $feature->description_2 !!}</textarea>
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit User</button>
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
