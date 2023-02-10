@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Role</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-plus">Edit Role</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.roles.update', [$role->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Role Name </label>
                                        <input class="form-control fc-datepicker" name="name" value="{{ $role->name }}"
                                            type="text">
                                    </div>
                                    @foreach ($permission as $value)
                                        <div class="col">
                                            <label for="{{$value->id}}">
                                                <input data-name='{{$value->name}}' id="{{$value->id}}" type="checkbox" name="permissions[]" value="{{$value->id}}" data-parsley-multiple="groups"  {{$role->hasPermissionTo($value->name) ? 'checked' : ''}}>
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                {{$value['name']}}
                                            </label>
                                        </div>
                                    @endforeach
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
