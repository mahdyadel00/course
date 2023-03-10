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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data"
                                    autocomplete="off">
                                    @csrf
                                    <div class="col">
                                        <label> First Name</label>
                                        <input class="form-control fc-datepicker" name="first_name">
                                        @error('first_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Last Name</label>
                                        <input class="form-control fc-datepicker" name="last_name">
                                        @error('last_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Name</label>
                                        <input class="form-control fc-datepicker" name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
                                        <input class="form-control fc-datepicker" name="password" type="password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Birthdate</label>
                                        <input class="form-control fc-datepicker" name="birthdate" type="date">
                                        @error('birthdate')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control fc-datepicker" name="address" type="text">
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Education</label>
                                        <input class="form-control fc-datepicker" name="education" type="text">
                                        @error('education')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Qulification</label>
                                        <input class="form-control fc-datepicker" name="qulification" type="text">
                                        @error('qulification')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Task</label>
                                        <textarea class="ckeditor" name="task" id="task" cols="30" rows="10"></textarea>
                                        @error('task')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Notes</label>
                                        <textarea class="ckeditor" name="notes" id="notes" cols="30" rows="10"></textarea>
                                        @error('notes')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Marketing Fields</label><br>
                                            @foreach ($marketings as $marketing)
                                                <input class="fc-datepicker" type="checkbox" name="marketing_id[]" value="{{ $marketing->id }}">{{ $marketing->title }}
                                                <br>
                                            @endforeach
                                        </select>
                                        @error('marketing_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Country Name</label>
                                        <select name="country_id" id="country_id" class="form-control fc-datepicker">
                                            <option disabled value="0">Select Country Name</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                            @error('country_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>City Name</label>
                                        <select name="city_id" id="city_id" class="form-control fc-datepicker">
                                            <option disabled value="0">Select City Name</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                            @error('city_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>English</label>
                                        <select name="english" id="english" class="form-control fc-datepicker">
                                            <option disabled value="0">Select Level Language</option>
                                            <option value="elementary">Elementary</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="advanced">Advanced</option>
                                            @error('english')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Identy</label>
                                        <input type="file" class="form-control modal-title" name='identy'
                                            accept="image/jpeg,image/jpg,image/png">
                                        @error('identy')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>CV</label>
                                        <input type="file" class="form-control modal-title" name='cv'>
                                        @error('cv')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.status')</label>
                                            <input type="checkbox" value="1" name="status">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.fill_survy')</label>
                                            <input type="checkbox" value="1" name="fill_survy">
                                            @error('fill_survy')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label class="infoTitle">@lang('site.policies')</label>
                                            <input type="checkbox" value="1" name="policies">
                                            @error('policies')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center col">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-top: 25px;padding: 10px 100px;">
                                            Add User
                                        </button>
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
    @push('js')
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush
@endsection
