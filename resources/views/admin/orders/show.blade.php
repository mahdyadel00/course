@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Show Order</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{ $order->user ? $order->user->name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{ $order->amount }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Options</th>
                                    <td>{{ $order->payment_option }}</td>
                                </tr>
                                <tr>
                                    <th>Ticket Name</th>
                                    <td>{{ $order->pricing ? $order->pricing->title : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($order->status == 'pending')
                                            <button class="btn btn-warning" style="color:black">{{ $order->status }}</button>
                                        @elseif($order->status == 'approved')
                                            <button class="btn btn-success" style="color:black">{{ $order->status }}</button>
                                        @elseif($order->status == 'FAILED')
                                            <button class="btn btn-danger" style="color:black">{{ $order->status }}</button>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer Reference</th>
                                    <td>{{ $order->customerReference }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ date('d-m-Y', strtotime($order->created_at)) }}</span>
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
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary"
                        style="margin-top: 25px;padding: 10px 100px;">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
