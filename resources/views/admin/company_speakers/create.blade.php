@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Company Speakers</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.companyspeakers.index') }}">
                            <i class="fa fa-plus">Show Sponser</i>
                        </a></button>
                </div>
                {{-- message --}}
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.companyspeakers.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name">
                                        @error('name')
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
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Add Company Speaker</button>
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
