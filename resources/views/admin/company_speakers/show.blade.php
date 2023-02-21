@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show Company Speaker</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ $company->image }}" width="100px" height="100px" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $company->name }}</td>
                                <tr>
                                <tr>
                                    <th>Link</th>
                                    <td>{{ $company->link }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($company->created_at)) }}</span>
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
                    <a href="{{ route('admin.companyspeakers.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
