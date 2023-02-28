<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with(['user' , 'pricing'])->get();
        return view('admin.orders.index', compact('orders'));
    }

    //show order details
    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.orders.show', compact('order'));
    }

    //delete order

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('success', 'Order Deleted Successfully');
    }
}
