@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show Feature</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $feature->title }}</td>
                                <tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! $feature->description !!}</td>
                                </tr>
                                <tr>
                                    <th>Pricing</th>
                                    <td>{{ $feature->pricing ? $feature->pricing->title : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ date('d-m-Y', strtotime($feature->created_at)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center col">
                    <a href="{{ route('admin.features.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
