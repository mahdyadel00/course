@extends('layouts.admin.app')
@push('style')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Speakers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.speakers.create') }}">
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
                                    <th>Company Name</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($speakers as $speaker)
                                    <tr>
                                        <td>{{ $speaker->id }}</td>
                                        <td>{{ $speaker->name }}</td>
                                        <td>{{ $speaker->email }}</td>
                                        <td>{{ $speaker->company ? $speaker->company->name : '' }}</td>
                                        <td>{{ $speaker->phone }}</td>
                                        <td><img src="{{ $speaker->image }}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($speaker->created_at)) }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.speakers.show', $speaker->id) }}"
                                                class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button class="btn btn-primary">
                                                <a href="{{ route('admin.speakers.edit', [$speaker->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit speaker">
                                                    <i class="fa fa-edit"></i>
                                                </a></button>
                                            <form action="{{ route('admin.speakers.delete', [$speaker->id]) }}"
                                                method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete speaker">
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
{{-- @push('js')
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                let id = $(this).data('id');
                let link = '{{ route('admin.users.cahngStatus') }}'

                $.ajax({
                    url: link,
                    method: 'post',
                    data: {
                        'status': status,
                        'id': id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(res) {
                        if (res) {
                            new Noty({
                                type: 'success',
                                layout: 'topRight',
                                text: "{{ __('site.email_veryfied_have_successfully') }}",
                                timeout: 2000,
                                killer: true
                            }).show();
                            table.ajax.reload();
                        }
                    }
                });
            })
        })
    </script>
@endpush --}}
