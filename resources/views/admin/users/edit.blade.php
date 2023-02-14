@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Edit User</i>
                        </a></button>
                </div>
                @include('layouts.admin._partials._session')
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.users.update', [$user->id]) }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name </label>
                                        <input class="form-control fc-datepicker" name="first_name"
                                            value="{{ $user->first_name }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Last Name </label>
                                        <input class="form-control fc-datepicker" name="last_name"
                                            value="{{ $user->last_name }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Name </label>
                                        <input class="form-control fc-datepicker" name="name" value="{{ $user->name }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label> Email</label>
                                        <input class="form-control fc-datepicker" name="email" value="{{ $user->email }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" value="{{ $user->phone }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Birthdate</label>
                                        <input class="form-control fc-datepicker" name="birthdate"
                                            value="{{ $user->birthdate }}" type="date">
                                    </div>
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control fc-datepicker" name="address"
                                            value="{{ $user->address }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Education</label>
                                        <input class="form-control fc-datepicker" name="education"
                                            value="{{ $user->education }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Qulification</label>
                                        <input class="form-control fc-datepicker" name="qulification"
                                            value="{{ $user->qulification }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>English</label>
                                        <select class="form-control" name="english">
                                            <option value="1" {{ $user->english == 1 ? 'selected' : '' }}>Elementary
                                            </option>
                                            <option value="2" {{ $user->english == 2 ? 'selected' : '' }}>Intermediate
                                            </option>
                                            <option value="3" {{ $user->english == 3 ? 'selected' : '' }}>Advanced
                                            </option>
                                        </select>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <label class="infoTitle">@lang('site.roles')</label>
                                        <select name="roles_name[]" id="roles"
                                            class="form-control js-example-basic-multiple" multiple="multiple">
                                            <option disabled value="0">Select Roles</option>
                                            @foreach ($roles as $role)
                                                <option value={{ $role  }}>
                                                    {{ $role }} </option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col">
                                        <label for="task">Task</label>
                                        <textarea name="task" class="form-control modal-title ckeditor" id="task">{{ $user->task }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="nots">Notes</label>
                                        <textarea name="notes" class="form-control modal-title ckeditor" id="notes">{{ $user->notes }}</textarea>
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($user->image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label for="identy">Identy</label>
                                        <input type="file" class="form-control modal-title" name='identy'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($user->identy) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label>CV</label>
                                        <input type="file" class="form-control modal-title" name='cv'
                                            accept="application/pdf">
                                        <a href="{{ route('admin.users.download', $user->id) }}">
                                            <i class="fas fa-download">Dwonload CV</i>
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="infoTitle">@lang('site.status')</label>
                                        <input type="checkbox" value="1" {{ $user->status == 1 ? 'checked' : '' }}
                                            name="status">
                                    </div>
                                    <div class="col">
                                        <label>Fill Survy</label>
                                        <input name="fill_survy" value="1"
                                            {{ $user->fill_survy == 1 ? 'checked' : '' }} type="checkbox">
                                    </div>
                                    <div class="col">
                                        <label>Policies</label>
                                        <input name="policies" value="1" {{ $user->policies == 1 ? 'checked' : '' }}
                                            type="checkbox">
                                    </div>

                            </div>
                            <div class="d-flex justify-content-center col">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-top: 25px;padding: 10px 100px;">Edit User</button>
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
@endsection
