@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Topic Speakers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.topicSpeakers.index') }}">
                            <i class="fa fa-plus">Show Topic Speakers</i>
                        </a></button>
                </div>
                {{-- message --}}
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.topicSpeakers.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Title</label>
                                        <input class="form-control fc-datepicker" name="title">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Description</label>
                                        <textarea class="form-control fc-datepicker" name="description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- //speaker name --}}
                                    <div class="col">
                                        <label> Speaker Name</label>
                                        <select name="speaker_id" id="speaker_id" class="form-control fc-datepicker">
                                            <option disabled selected value="">Select Speaker</option>
                                            @foreach ($speakers as $speaker)
                                                <option value="{{ $speaker->id }}">{{ $speaker->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('speaker_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- //days --}}
                                    <div class="col">
                                        <label> Days</label>
                                        <select name="days" id="days" class="form-control fc-datepicker">
                                            <option disabled selected value="">Select Day</option>
                                            <option value="First Day">First Day</option>
                                            <option value="Second Day">Second Day</option>
                                            <option value="Third Day">Third Day</option>
                                        </select>
                                        @error('days')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Link</label>
                                        <input class="form-control fc-datepicker" name="link">
                                        @error('link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- //start time --}}
                                    <div class="col">
                                        <label> Start Time</label>
                                        <input class="form-control fc-datepicker" name="start_time" type="time">
                                        @error('start_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- //end time --}}
                                    <div class="col">
                                        <label> End Time</label>
                                        <input class="form-control fc-datepicker" name="end_time" type="time">
                                        @error('end_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Add Topic Speakers</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->
        </div>
    </div>
    <!-- row closed -->
    </div>
    </div>
    </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush
@endsection
