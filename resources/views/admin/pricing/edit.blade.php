@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Pricing</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.pricing.index') }}">
                            <i class="fa fa-plus">Edit Pricing</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.pricing.update', [$pricing->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>Title</label>
                                        <input class="form-control fc-datepicker" name="title"
                                            value="{{ $pricing->title }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Description</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description" id="description" cols="30" rows="10">{{ $pricing->description }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Price</label>
                                        <input class="form-control fc-datepicker" name="price"
                                            value="{{ $pricing->price }}" type="text">
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit Pricing</button>
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
