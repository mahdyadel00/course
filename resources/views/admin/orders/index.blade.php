@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Orders</h6>
                </div>
                @include('layouts.admin._partials._session')
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Amount</th>
                                    <th>Payment Options</th>
                                    <th>Ticket Name</th>
                                    <th>Status</th>
                                    <th>Customer Reference</th>
                                    <th>Created At</th>
                                    <th class="text-secondary opaorder-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user ? $order->user->name : '' }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->payment_option }}</td>
                                        <td>{{ $order->pricing ? $order->pricing->title : '' }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->customerReference }}</td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($order->created_at)) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-success">
                                                <a href="{{ route('admin.orders.show', [$order->id]) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Show order">
                                                    <i class="fa fa-eye"></i>
                                                </a></button>
                                            <form action="{{ route('admin.orders.delete', [$order->id]) }}" method="post"
                                                style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" type="submit">
                                                    <a href="#" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Delete order">
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
