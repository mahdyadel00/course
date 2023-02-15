@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show Role</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>3</th>
                                    <td>{{ $role->id }}</td>
                                </tr>
                                <tr>
                                    <th>Role Name</th>
                                    <td>{{ $role->name }}</td>
                                <tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $role->created_at }}</td>
                                </tr>
                                <td>
                                    @if (!empty($rolePermissions))
                                        @foreach ($rolePermissions as $v)
                                            <li>{{ $v->name }}</li>
                                        @endforeach
                                    @endif
                                <td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
