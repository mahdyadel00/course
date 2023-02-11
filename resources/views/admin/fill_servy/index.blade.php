@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Fill Servy</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.servay.create') }}">
                            <i class="fa fa-plus">Create</i>
                        </a></button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Faq</th>
                                    <th>Answer</th>
                                    <th>Created At</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servy as $serv)
                                    <tr>
                                        <td>{{ $serv->id }}</td>
                                        <td>{{ $serv->faq }}</td>
                                        <td class="align-middle text-center text-sm">
                                            @if ($serv->answer == 1)
                                                <span class="badge badge-sm bg-gradient-success">True</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-danger">False</span>
                                            @endif
                                        </td>
                                        <td>{{ $serv->created_at }}</td>
                                        <td class="align-middle">
                                            {{-- <button class="btn btn-success">
                                                <a href="{{ route('admin.servay.show', [$serv->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Show serv">
                                                    <i class="fa fa-eye"></i>
                                                </a></button> --}}
                                            <button class="btn btn-info">
                                                <a href="{{ route('admin.servay.edit', [$serv->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit serv">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.servay.delete', [$serv->id]) }}" method="post"
                                                style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete serv">
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
