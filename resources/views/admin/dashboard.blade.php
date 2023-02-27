@extends('layouts.admin.app')

@section('content')
    <div>
        <h2>@lang('site.home')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item">@lang('site.home')</li>
    </ul>

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                @can('users_index')
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="{{ route('admin.users.index') }}"
                                       class="text-sm mb-0 text-capitalize font-weight-bold">Users</a>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $users->count() }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <a href="{{ route('admin.users.index') }}">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                @can('speakers_index')
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="{{ route('admin.speakers.index') }}"
                                       class="text-sm mb-0 text-capitalize font-weight-bold">Speakers</a>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $speakers->count() }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <a href="{{ route('admin.speakers.index') }}">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                @can('sponsers_index')
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="{{ route('admin.sponsers.index') }}"
                                       class="text-sm mb-0 text-capitalize font-weight-bold">Sponser</a>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $sponser->count() }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <a href="{{ route('admin.sponsers.index') }}">
                                        <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                @can('contacts_index')
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="{{ route('admin.contacts.index') }}"
                                       class="text-sm mb-0 text-capitalize font-weight-bold">Contact Us</a>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $contacts->count() }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <a href="{{ route('admin.contacts.index') }}">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
