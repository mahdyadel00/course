@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h5>Show Role <span class="text-primary">({{ $role->name }})</span></h5>
                </div>
                <div class="card-body pt-3 pb-2">
                        <div class="container pb-4">
                            <h6>Permissions</h6>
                            <div class="row">
                                @if (!empty($rolePermissions))
                                    @foreach ($rolePermissions as $v)
                                        <div class="col-4">
                                            {{ __('admin.' . str_replace('_', '.', $v->name)) }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
