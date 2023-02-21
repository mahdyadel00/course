@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Company Speakers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.companyspeakers.create') }}">
                            <i class="fa fa-plus">Create</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>
                                            <img src="{{ $company->image }}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->link }}</td>
                                        <td>{{ $company->type }}</td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($company->created_at)) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-success">
                                                <a href="{{ route('admin.companyspeakers.show', [$company->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Show company">
                                                    <i class="fa fa-eye"></i>
                                                </a></button>
                                            <button class="btn btn-info">
                                                <a href="{{ route('admin.companyspeakers.edit', [$company->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit company">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.companyspeakers.delete', [$company->id]) }}"
                                                method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete company">
                                                        <i class="fa fa-trash"></i>
                                                    </a></button>
                                            </form><!-- end of form -->
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
