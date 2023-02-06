@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Speakers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.speakers.index') }}">
                            <i class="fa fa-plus">Edit Speaker</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.speakers.update', [$speaker->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name" required  value="{{ $speaker->name }}">
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email" required value="{{ $speaker->email }}">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number" required value="{{ $speaker->phone }}">
                                    </div>
                                    <div class="col">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" required>{{ $speaker->description }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" required>{{ $speaker->address }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control" value="{{ $speaker->website }}">
                                    </div>
                                    <div class="col">
                                        <label>Interview</label>
                                        <textarea class="form-control" name="interview" required>{{ $speaker->interview }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control" value="{{ $speaker->twitter }}">
                                    </div>
                                    <div class="col">
                                        <label>Behance</label>
                                        <input type="text" name="behance" class="form-control" value="{{ $speaker->behance}}">
                                    </div>
                                    <div class="col">
                                        <label>Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control" value="{{ $speaker->linkedin }}">
                                    </div>
                                    <div class="col">
                                        <label>Bimeo</label>
                                        <input type="text" name="vimeo" class="form-control" value="{{ $speaker->vimeo }}">
                                    </div>
                                    <div class="col">
                                        <label>Instgram</label>
                                        <input type="text" name="instagram" class="form-control" value="{{ $speaker->instagram }}">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
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
