@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                    @can('users_create')
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ route('admin.users.create') }}">
                                <i class="fa fa-plus"></i> Create
                            </a>
                        </button>
                    @endcan
                </div>
                @include('layouts.admin._partials._session')
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country Name</th>
                                    <th>City Name</th>
                                    <th>Roles</th>
                                    <th>Status</th>
                                    <th>Creaed At</th>
                                    <th>Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <img src="{{ $user->image }}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->phone }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $user->country ? $user->country->name : '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $user->city ? $user->city->name : '' }}</p>
                                        </td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $role)
                                                    <span>{{ $role }}</span>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @if ($user->id === auth()->user()->id)
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-danger">Offline</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($user->created_at)) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            @can('users_show')
                                                <button class="btn btn-success">
                                                    <a href="{{ route('admin.users.show', [$user->id]) }}"
                                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Show user">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </button>
                                            @endcan
                                            @can('users_edit')
                                                <button class="btn btn-info">
                                                    <a href="{{ route('admin.users.edit', [$user->id]) }}"
                                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </button>
                                            @endcan
                                            @can('users_delete')
                                                <form action="{{ route('admin.users.delete', [$user->id]) }}" method="post"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">
                                                        <a href="#" class="text-secondary font-weight-bold text-xs"
                                                            data-toggle="tooltip" data-original-title="Delete user">
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
