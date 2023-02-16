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
                                      method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Role Name </label>
                                        <input class="form-control fc-datepicker" name="name" value="{{ $role->name }}"
                                               type="text">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <h6>Permissions</h6>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="all"
                                                       id="select_all" {{ count($rolePermissions) === count($permission) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="select_all">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        @foreach ($permission as $value)
                                            <div class="col-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="permissions[]" type="checkbox"
                                                           value="{{ $value->id }}" id="{{ $value->id }}"
                                                        {{$role->hasPermissionTo($value->name) ? 'checked' : ''}}>
                                                    <label class="form-check-label" for="{{ $value->id }}">
                                                        {{ __('admin.' . str_replace('_', '.', $value->name)) }}
                                                    </label>
                                                </div>
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
        </div>
        <!-- row closed -->
    </div>
@endsection
@push('js')
    <script>
        $('#select_all').click(function () {
            $('.form-check-input').prop('checked', $(this).prop('checked'));
        });

        $('.form-check-input').change(function () {
            if (!$(this).prop('checked')) {
                $('#select_all').prop('checked', false);
            }

            if ($('.form-check-input:checked').not('#select_all').length === $('.form-check-input').not('#select_all').length) {
                $('#select_all').prop('checked', true);
            }
        });
    </script>
@endpush

