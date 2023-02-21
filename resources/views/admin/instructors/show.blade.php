@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Instructor</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ $Instructor->image }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $Instructor->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $Instructor->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $Instructor->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Job Title</th>
                                    <td>{{ $Instructor->job_title }}</td>
                                </tr>
                                <tr>
                                    <th>Personal Statment</th>
                                    <td>{!! $Instructor->personal_info !!}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! $Instructor->description !!}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $Instructor->address }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>{{ $Instructor->website }}</td>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <td>
                                        <a href="{{ $Instructor->facebook }}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Twitter</th>
                                    <td>
                                        <a href="{{ $Instructor->twitter }}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Behance</th>
                                    <td>
                                        <a href="{{ $Instructor->behance }}" target="_blank">
                                            <i class="fa fa-behance"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Linkedin</th>
                                    <td>
                                        <a href="{{ $Instructor->linkedin }}" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vimeo</th>
                                    <td>
                                        <a href="{{ $Instructor->vimeo }}" target="_blank">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Instagram</th>
                                    <td>
                                        <a href="{{ $Instructor->instagram }}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Youtube</th>
                                    <td>
                                        <a href="{{ $Instructor->youtube }}" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tiktok</th>
                                    <td>
                                        <a target="_blank" href="{{ $Instructor->tiktok }}" class="tiktok" style="background:black">
                                            <img src="{{ asset('dashboard') }}/assets/img/tik.png" alt="">
                                        </a>
                                    </td>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ date('d-m-Y', strtotime($Instructor->created_at)) }}</td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center col">
                    <a href="{{ route('admin.instructors.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
