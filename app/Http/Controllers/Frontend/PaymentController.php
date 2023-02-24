<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class PaymentController extends Controller
{

    public function payment(Request $request)
    {
        // {
        //     "amount": 10,
        //     "currency": "EGP",
        //     "paymentOptions": [
        //         2,
        //         3,
        //         4,
        //         5,
        //         6
        //     ],
        //     "cashExpiry": 3,
        //     "name": "Omar Ayman",
        //     "email": "omar@ayman.com",
        //     "mobile": "01011111111111",
        //     "redirectUrl": "https://www.google.com/",
        //     "customerReference": 111
        // }

        $data['amount'] = 1;
        $data['currency'] = 'EGP';
        $data['paymentOptions'] = [2, 3, 4, 5, 6];
        $data['cashExpiry'] = 3;
        $data['name'] = 'Mahdy Adel';
        $data['email'] = 'mahdyadel@geexar.dev';
        $data['mobile'] = '01122907742';
        $data['redirectUrl'] = 'https://www.google.com/';
        $data['customerReference'] = 111;

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer f04661u04gk3qdjk"
        ];

        $ch = curl_init();
        $url = "https://back.easykash.net/api/directpayv1/pay";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $output = curl_exec($ch);
        dd($output);
        curl_close($ch);
        $response = json_decode($output, true);
        return redirect($response);

    }

    public function callback(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

}
