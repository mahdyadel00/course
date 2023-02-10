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
                                    <th>First Name</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->first_name }}</p>
                                    </td>
                                <tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->last_name }}</p>
                                    </td>
                                </tr>
                                <th>User Name</th>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $user->name }}</p>
                                </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->phone }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->address }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birthdata</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->birthdate }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->education }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Qulification</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->qulification }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>English</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->english }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Fill Survy</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->fill_survy }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Policies</th>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->policies }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CV</th>
                                    <td>
                                        <div class="download-catalog mt-3">
                                        {{-- <a href="{{ asset($user->cv) }}">{{ basename($user->cv,".pdf") }}</a> --}}
                                        <a href="{{ asset($user->cv) }}"
                                            class="d-flex justify-content-between align-items-center" download="">
                                            <p>
                                                
                                                <img src="{{ $user->cv }}" alt="" class="img-fluid" loading="lazy">
                                                {{ basename($user->cv,".pdf") }}
                                                {{-- {{ basename(explode($user->cv , 1 ))}} --}}
                                            </p>
                                            <i class="fas fa-download"></i>
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
                                    <th>Created_at</th>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
