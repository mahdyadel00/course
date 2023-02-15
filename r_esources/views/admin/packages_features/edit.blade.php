@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Package Features</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.packages_features.index') }}">
                            <i class="fa fa-plus">Edit Package Feature</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample"
                                    action="{{ route('admin.packages_features.update', [$package_feature->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>Title</label>
                                        <input class="form-control fc-datepicker" name="title"
                                            value="{{ $package_feature->title }}" type="text">
                                    </div>
                                    {{-- pricing --}}
                                    <div class="col">
                                        <label for="priceing">Pricing</label>
                                        <select name="price_id" id="price_id" class="form-control fc-datepicker">
                                            <option value="" selected disabled>Select Pricing</option>
                                            @foreach ($pricing as $price)
                                                <option value="{{ $price->id }}"
                                                    {{ $package_feature->price_id == $price->id ? 'selected' : '' }}>
                                                    {{ $price->title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="col">
                                            <label>Description</label>
                                            <textarea class="form-control fc-datepicker ckeditor" name="description" id="description" cols="30" rows="10">{{ $package_feature->description }}</textarea>
                                        </div>
                                        <div class="d-flex justify-content-center col">
                                            <button type="submit" class="btn btn-primary"
                                                style="margin-top: 25px;padding: 10px 100px;">Edit Package Feature</button>
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
