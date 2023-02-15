@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Show users</i>
                        </a></button>
                </div>
                {{-- message --}}
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name</label>
                                        <input class="form-control fc-datepicker" name="first_name">
                                    </div>
                                    <div class="col">
                                        <label> Last Name</label>
                                        <input class="form-control fc-datepicker" name="last_name">
                                    </div>
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name">
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email">
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
                                        <input class="form-control fc-datepicker" name="password" type="password">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number">
                                    </div>
                                    <div class="col">
                                        <label>Birthdate</label>
                                        <input class="form-control fc-datepicker" name="birthdate" type="date">
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control fc-datepicker" name="address" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Education</label>
                                        <input class="form-control fc-datepicker" name="education" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Qulification</label>
                                        <input class="form-control fc-datepicker" name="qulification" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Task</label>
                                        <textarea class="ckeditor" name="task" id="task" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col">
                                        <label>Notes</label>
                                        <textarea class="ckeditor" name="notes" id="notes" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col">
                                        <label>Marketing Fields</label>
                                        <select name="marketing_id" id="marketing_id" class="form-control fc-datepicker">
                                            <option disabled value="0">Select Marketing Fields</option>
                                            @foreach ($marketings as $marketing)
                                            <option value="{{ $marketing->id }}">{{ $marketing->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>English</label>
                                        <select name="english" id="english" class="form-control fc-datepicker">
                                            <option disabled value="0">Select Level Language</option>
                                            <option value="elementary">Elementary</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="advanced">Advanced</option>
                                        </select>
                                    </div>
                                    {{-- roles --}}
                                    {{-- <div class="col">
                                        <label>Roles</label>
                                        <select name="roles_name[]" id="roles" class="form-control js-example-basic-multiple"
                                            multiple="multiple">
                                            <option disabled value="0">Select Roles</option>
                                            @foreach ($roles as $role)
                                                <option>{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                    </div>
                                    <div class="col">
                                        <label>Identy</label>
                                        <input type="file" class="form-control modal-title" name='identy'
                                            accept="image/jpeg,image/jpg,image/png">
                                    </div>
                                    <div class="col">
                                        <label>CV</label>
                                        <input type="file" class="form-control modal-title" name='cv'>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.status')</label>
                                            <input type="checkbox" value="1" name="status">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.fill_survy')</label>
                                            <input type="checkbox" value="1" name="fill_survy">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.policies')</label>
                                            <input type="checkbox" value="1" name="policies">
                                        </div>
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center col">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-top: 25px;padding: 10px 100px;">Add User</button>
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
