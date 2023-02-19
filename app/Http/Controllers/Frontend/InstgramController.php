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
        // dd($code);
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = '540013058117269';
        $secret = 'a415628cb151bf9348027f05f16ecc2b';
        $redirectUri =urlencode('https://grow.geexar.dev/instgram/callback');

        $user = new User();

        // Get access token
        $response = $user->request('POST', 'https://api.instagram.com/oauth/access_token', [
            'form_params' => [
                'instgram_id' => $appId,
                // 'password' => $secret,
                // 'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
                'password' => $code,
            ]
        ]);

        if ($response->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
        }
        dd('ok');
        $content = $response->getBody()->getContents();
        $content = json_decode($content);

        $accessToken = $content->access_token;
        $userId = $content->user_id;

        // Get user info
        $response = $user->request('GET', "https://graph.instagram.com/me?fields=id,username,account_type&access_token={$accessToken}");

        $content = $response->getBody()->getContents();
        $oAuth = json_decode($content);

        // Get instagram user name
        $username = $oAuth->username;

        // do your code here

    }
}
