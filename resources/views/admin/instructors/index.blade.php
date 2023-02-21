@extends('layouts.admin.app')
@push('style')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>instructors</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.instructors.create') }}">
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instructors as $Instructor)
                                    <tr>
                                        <td>{{ $Instructor->id }}</td>
                                        <td>{{ $Instructor->name }}</td>
                                        <td>{{ $Instructor->email }}</td>
                                        <td>{{ $Instructor->phone }}</td>
                                        <td><img src="{{ $Instructor->image }}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($Instructor->created_at)) }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.instructors.show', $Instructor->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button class="btn btn-primary">
                                                <a href="{{ route('admin.instructors.edit', [$Instructor->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit Instructor">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.instructors.delete', [$Instructor->id]) }}"
                                                method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete Instructor">
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
