@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Diploma</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.diplomas.index') }}">
                            <i class="fa fa-plus">Show Diploma</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.diplomas.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Title</label>
                                        <input class="form-control fc-datepicker" name="title" required>
                                    </div>
                                    <div class="col">
                                        <label> Price</label>
                                        <input class="form-control fc-datepicker" name="price" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                        <label> Description</label>
                                        <textarea class="form-control fc-datepicker ckeditor" name="description" id="description" cols="30" rows="10" required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">Add Diploma</button>
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