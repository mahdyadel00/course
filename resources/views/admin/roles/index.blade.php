@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Roles</h6>
                    @can('roles_create')
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('admin.roles.create') }}">
                                <i class="fa fa-plus"></i> Create
                            </a></button>
                    @endcan
                </div>
                <div class="card-body pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role
                                    Name
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Created_at
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $role->name }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $role->created_at }}</span>
                                    </td>
                                    <td class="text-center">
                                        @can('roles_show')
                                            <button class="btn btn-success">
                                                <a href="{{ route('admin.roles.show', [$role->id]) }}"
                                                   class="text-white text-secondary font-weight-bold text-xs"
                                                   data-toggle="tooltip"
                                                   data-original-title="Show role">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </button>
                                        @endcan
                                        @can('roles_update')
                                            <button class="btn btn-info">
                                                <a href="{{ route('admin.roles.edit', [$role->id]) }}"
                                                   class="text-white text-secondary font-weight-bold text-xs"
                                                   data-toggle="tooltip"
                                                   data-original-title="Edit role">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </button>
                                        @endcan
                                        @can('roles_delete')
                                            <form action="{{ route('admin.roles.delete', [$role->id]) }}" method="post"
                                                  style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#"
                                                       class="text-white text-secondary font-weight-bold text-xs"
                                                       data-toggle="tooltip" data-original-title="Delete role">
                                                        <i class="fa fa-trash"></i>
                                                    </a></button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
