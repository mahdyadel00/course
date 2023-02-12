@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Speaker</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ $speaker->image }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $speaker->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $speaker->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $speaker->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Job Title</th>
                                    <td>{!! $speaker->job_title !!}</td>
                                </tr>
                                <tr>
                                    <th>Personal Statment</th>
                                    <td>{!! $speaker->personal_info !!}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! $speaker->description !!}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $speaker->address }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>{{ $speaker->website }}</td>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <td>
                                        <a href="{{ $speaker->facebook }}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Twitter</th>
                                    <td>
                                        <a href="{{ $speaker->twitter }}" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Behance</th>
                                    <td>
                                        <a href="{{ $speaker->behance }}" target="_blank">
                                            <i class="fa fa-behance"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Linkedin</th>
                                    <td>
                                        <a href="{{ $speaker->linkedin }}" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vimeo</th>
                                    <td>
                                        <a href="{{ $speaker->vimeo }}" target="_blank">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Instagram</th>
                                    <td>
                                        <a href="{{ $speaker->instagram }}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Youtube</th>
                                    <td>
                                        <a href="{{ $speaker->youtube }}" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tiktok</th>
                                    <td>
                                        <a target="_blank" href="{{ $speaker->tiktok }}" class="tiktok" style="background:black">
                                            <img src="{{ asset('dashboard') }}/assets/img/tik.png" alt="">
                                        </a>
                                    </td>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ date('d-m-Y', strtotime($speaker->created_at)) }}</td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
