@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show User</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ $user->image }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Identy</th>
                                    <td>
                                        <img src="{{ $user->identy }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $user->first_name }}</td>
                                <tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ $user->last_name }}</td>
                                </tr>
                                <th>User Name</th>
                                <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Marketing</th>
                                    <td>{{ $user->marketing ? $user->marketing->title : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country Name</th>
                                    <td>{{ $user->country ? $user->country->name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <th>Birthdata</th>
                                    <td>{{ $user->birthdate }}</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>{{ $user->education }}</td>
                                </tr>
                                <tr>
                                    <th>Qulification</th>
                                    <td>{{ $user->qulification }}</td>
                                </tr>
                                <tr>
                                    <th>English</th>
                                    <td>{{ $user->english }}</td>
                                </tr>
                                <tr>
                                    <th>Fill Survy</th>
                                    <td>{{ $user->fill_survy }}</td>
                                </tr>
                                <tr>
                                    <th>Policies</th>
                                    <td>{{ $user->policies }}</td>
                                </tr>
                                <tr>
                                    <th>CV</th>
                                    <td>
                                        <div class="download-catalog mt-3">
                                            <a href="{{ route('admin.users.download', $user->id) }}">
                                                <i class="fas fa-download">Dwonload CV</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($user->id == auth()->user()->id)
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-danger">Offline</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($user->created_at)) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center col">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
