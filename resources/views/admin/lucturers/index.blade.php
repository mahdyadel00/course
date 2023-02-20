@extends('layouts.admin.app')
@push('style')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Lucturers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.lucturers.create') }}">
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
                                @foreach ($lucturers as $lucturer)
                                    <tr>
                                        <td>{{ $lucturer->id }}</td>
                                        <td>{{ $lucturer->name }}</td>
                                        <td>{{ $lucturer->email }}</td>
                                        <td>{{ $lucturer->phone }}</td>
                                        <td><img src="{{ $lucturer->image }}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($lucturer->created_at)) }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.lucturers.show', $lucturer->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button class="btn btn-primary">
                                                <a href="{{ route('admin.lucturers.edit', [$lucturer->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit lucturer">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.lucturers.delete', [$lucturer->id]) }}"
                                                method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete lucturer">
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
