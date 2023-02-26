<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\ChangePassword;
use App\Http\Requests\Frontend\Auth\CheckCode;
use App\Http\Requests\Frontend\Auth\CheckEmail;
use App\Models\User;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RestPasswordController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(CheckEmail $request)
    {

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $code       = random_int(111111, 999999);
            $updateUser = $user->update(['pin_code' => $code]);

            if ($updateUser) {
                Mail::to($user->email)->send(new ResetPassword($code));
            }
        }

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token)
    {
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(ChangePassword $request)
    {
        $user = User::where('pin_code', $request->token)->where('pin_code', '!=', 0)->first();

        if ($user) {
            $user->update(["password" => Hash::make($request->password), "pin_code" => null]);

            return redirect()->route('login.show')->with('success', 'Your password has been changed!');
        } else {
            return redirect()->route('login.show')->with('error', 'Your password has not been changed!');
        }
    }

}
