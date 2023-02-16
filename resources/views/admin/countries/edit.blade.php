@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Country</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.countries.index') }}">
                            <i class="fa fa-plus">Edit Country</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.countries.update', [$country->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name </label>
                                        <input class="form-control fc-datepicker" name="name"
                                            value="{{ $country->name }}" type="text">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Code </label>
                                        <input class="form-control fc-datepicker" name="code"
                                            value="{{ $country->code }}" type="text">
                                        @error('code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Flag</label>
                                        <input type="file" class="form-control modal-title" name='flag'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('flag')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <img src="{{ asset($country->flag) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit Country</button>
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
