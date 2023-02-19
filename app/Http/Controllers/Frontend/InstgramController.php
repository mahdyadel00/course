<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class InstgramController extends Controller
{
    //login with Instgram //login with Facebook

    public function providerInstgram()
    {
        $appId = '540013058117269';
        $redirectUri = urlencode('https://grow.geexar.dev/instgram/callback');
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }
    public function callbackHandelInstgram(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = '540013058117269';
        $secret = 'a415628cb151bf9348027f05f16ecc2b';
        $redirectUri = 'https://grow.geexar.dev/instgram/callback';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.instagram.com/oauth/access_token");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "app_id={$appId}&app_secret={$secret}&grant_type=authorization_code&redirect_uri={$redirectUri}&code={$code}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $accessToken = json_decode($data)->access_token;
        $userId = json_decode($data)->user_id;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://graph.instagram.com/me?fields=id,username&access_token={$accessToken}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        $oAuth = json_decode($response);

        $username = $oAuth->username;

        $user = ['eamil' => $username, 'token' => $userId, 'name' => $username, 'image' => 'https://graph.instagram.com/' . $userId . '/picture?access_token=' . $accessToken];

        $user = (object) $user;

        $data = User::where('email', $user->eamil)->first();
        if (is_null($data)) {
            User::updateOrCreate([
                'instgram_id' => $oAuth->id,
            ], [
                'name'     => $user->name,
                'email'    => $user->eamil,
                'password' => $user->token,
                'image'    => $user->image,
            ]);
            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Instgram');
        } else {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Instgram');
        }
    }
}
