@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show Topic Speakers</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $topic->title }}</td>
                                </tr>
                                <tr>
                                    <th>Speaker Name</th>
                                    <td>{{ $topic->name }}</td>
                                <tr>
                                    <th>Start Time</th>
                                    <td>{{ $topic->start_time }}</td>
                                </tr>
                                <tr>
                                    <th>End Time</th>
                                    <td>{{ $topic->end_time }}</td>
                                </tr>
                                <tr>
                                    <th>Days</th>
                                    <td>{{ $topic->days }}</td>
                                <tr>
                                    <th>Link</th>
                                    <td>{{ $topic->link }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $topic->description }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($topic->created_at)) }}</span>
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
                    <a href="{{ route('admin.topicSpeakers.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
