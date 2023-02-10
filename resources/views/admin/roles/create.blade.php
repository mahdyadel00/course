@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>roles</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-plus">Show Roles</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.roles.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name" required>
                                    </div>
                                    @foreach($permission as $value)
                                    <label>
                                        <input id="{{$value->id}}" type="checkbox" name="groups[]" value="{{$value->id}}" data-parsley-multiple="groups">
                                        <span class="cr">
                                       <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                        {{$value['name']}}
                                    </label>
                                    @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Add</button>
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
