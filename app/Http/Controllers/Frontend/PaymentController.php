<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Order\OrderPayment;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function payment(Request $request)
    {

        // $route  = route('payment.callback');
        $data['amount'] = 2;
        $data['currency'] = 'EGP';
        $data['paymentOptions'] = 2;
        $data['user_id'] = Auth::user()->id;
        $data['pricing_id'] = 1;
        $data['redirectUrl'] = 'https://grow.geexar.dev/payment/callback';
        // $data['redirectUrl'] = route('payment.callback');
        $data['customerReference'] = time() . rand(1000, 9999);
        $data['status'] = 'pending';
        //create order
        $order = Order::create($data);
        // dd($order);
        $data['paymentOptions'] = [2 , 3 , 4 , 5 , 6];
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
        // dd($output);
        curl_close($ch);
        $response = json_decode($output, true);
        // dd($response);
        foreach ($response as  $value) {
            return redirect($value);
        }
    }

    public function callback(Request $request)
    {
        $input = $request->all();
        dd($input);


    }
}
