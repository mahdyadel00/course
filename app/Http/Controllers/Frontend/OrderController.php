<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Order\OrderPayment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function create(Request $request)
    {

        $data['amount'] = 2;
        $data['currency'] = 'EGP';
        $data['paymentOptions'] = 2;
        $data['user_id'] = Auth::user()->id;
        $data['pricing_id'] = 1;
        $data['redirectUrl'] = route('callback.service');
        $data['customerReference'] = time() . rand(1000, 9999);
        $data['status'] = 'pending';
        //create order
        $order = Order::create($data);

        $data['paymentOptions'] = [2, 4, 5, 6];
        $data['name'] = Auth::user()->name;
        $data['email'] = Auth::user()->email;
        $data['mobile'] = Auth::user()->phone;


        $headers = [
            "Content-Type: application/json",
            "Authorization: f04661u04gk3qdjk"
        ];

        $ch = curl_init();
        $url = "https://back.easykash.net/api/directpayv1/pay";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $output = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($output, true);
        foreach ($response as  $value) {
            return redirect($value);
        }
    }

    public function callback(Request $request)
    {

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
