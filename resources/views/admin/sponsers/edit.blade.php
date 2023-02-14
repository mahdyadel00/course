@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Sponser</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.sponsers.index') }}">
                            <i class="fa fa-plus">Edit Sponser</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.sponsers.update', [$sponser->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name </label>
                                        <input class="form-control fc-datepicker" name="name"
                                            value="{{ $sponser->name }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Link </label>
                                        <input class="form-control fc-datepicker" name="link"
                                            value="{{ $sponser->link }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($sponser->image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Edit Sponser</button>
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
