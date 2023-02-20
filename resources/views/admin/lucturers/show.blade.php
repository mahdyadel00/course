@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Lucturer</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ $lucturer->image }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $lucturer->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $lucturer->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $lucturer->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Job Title</th>
                                    <td>{{ $lucturer->job_title }}</td>
                                </tr>
                                <tr>
                                    <th>Personal Statment</th>
                                    <td>{!! $lucturer->personal_info !!}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! $lucturer->description !!}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $lucturer->address }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>{{ $lucturer->website }}</td>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <td>
                                        <a href="{{ $lucturer->facebook }}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Twitter</th>
                                    <td>
                                        <a href="{{ $lucturer->twitter }}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Behance</th>
                                    <td>
                                        <a href="{{ $lucturer->behance }}" target="_blank">
                                            <i class="fa fa-behance"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Linkedin</th>
                                    <td>
                                        <a href="{{ $lucturer->linkedin }}" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vimeo</th>
                                    <td>
                                        <a href="{{ $lucturer->vimeo }}" target="_blank">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Instagram</th>
                                    <td>
                                        <a href="{{ $lucturer->instagram }}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Youtube</th>
                                    <td>
                                        <a href="{{ $lucturer->youtube }}" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tiktok</th>
                                    <td>
                                        <a target="_blank" href="{{ $lucturer->tiktok }}" class="tiktok" style="background:black">
                                            <img src="{{ asset('dashboard') }}/assets/img/tik.png" alt="">
                                        </a>
                                    </td>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ date('d-m-Y', strtotime($lucturer->created_at)) }}</td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center col">
                    <a href="{{ route('admin.lucturers.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
