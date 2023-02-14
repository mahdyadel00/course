@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Marketing</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.marketings.index') }}">
                            <i class="fa fa-plus">Edit Marketing</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.marketings.update', [$marketing->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Title </label>
                                        <input class="form-control fc-datepicker" name="title"
                                            value="{{ $marketing->title }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Description </label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description" id="description" cols="30" rows="10">{!! $marketing->description !!}</textarea>
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit marketing</button>
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
