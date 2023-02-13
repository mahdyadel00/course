@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Pricing</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.pricing.create') }}">
                            <i class="fa fa-plus">Create Pricing</i>
                        </a></button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>ِAction</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pricing as $price)
                                    <tr>
                                        <td>{{ $price->id }}</td>
                                        <td>{{ $price->title }}</td>
                                        <td>{{ $price->price }}</td>
                                        <td>{{ date('d-m-Y', strtotime($price->created_at)) }}</td>
                                        <td class="align-middle">
                                            <button class="btn btn-success">
                                                <a href="{{ route('admin.pricing.show', [$price->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Show price">
                                                    <i class="fa fa-eye"></i>
                                                </a></button>
                                            <button class="btn btn-info">
                                                <a href="{{ route('admin.pricing.edit', [$price->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit price">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.pricing.delete', [$price->id]) }}"
                                                method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete price">
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
