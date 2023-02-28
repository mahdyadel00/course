<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Order\OrderPayment;
use App\Http\Traits\PaymentTrait;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    use PaymentTrait;

    public function create(Request $request)
    {
        // use payment trait
        $this->payment($request);

    }

    public function callback(Request $request)
    {
        $input = $request->all();

        $order = Order::where('customerReference', $request->customerReference)->first();

        $order->update([

            'status'  => $request->status,
        ]);

        if ($order->status == "FAILED") {

            return redirect()->route('profile.index')->with('error', 'error payment');
        } else {
            return redirect()->route('profile.index')->with('success', 'success payment');
        }
    }
}
