<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Validator;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{

    public function edit()
    {
        $setting = Settings::first();

        return view('admin.settings.edit', compact('setting'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'title'         => 'sometimes',
            'description'   => 'sometimes',
            'address'       => 'sometimes',
            'phone'         => 'sometimes',
            'email'         => 'sometimes',
            'facebook'      => 'sometimes',
            'twitter'       => 'sometimes',
            'instagram'     => 'sometimes',
            'youtube'       => 'sometimes',
            'linkedin'      => 'sometimes',
            'google_plus'   => 'sometimes',
            'pinterest'     => 'sometimes',
            'footer_text'   => 'sometimes',
        ]);

        $setting = Settings::first();

        $logo_in_db = NULL;
        if ($request->has('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/settings';
            $logo = request('logo');
            $logo_name = time() . request('logo')->getClientOriginalName();
            $logo->move($path, $logo_name);
            $logo_in_db = '/uploads/settings/' . $logo_name;
        }else{
            $logo_in_db = $setting->logo;
        }
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/settings';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/settings/' . $image_name;
        }else{
            $image_in_db = $setting->image;
        }
        $setting->title_en = $request->title_en;
        $setting->title_ar = $request->title_ar;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->start_from = $request->start_from;
        $setting->end_at = $request->end_at;
        $setting->facebook_link = $request->facebook_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->linkedin_link = $request->linkedin_link;
        $setting->logo = $logo_in_db;
        $setting->image = $image_in_db;

        $setting->save();
        Cache::forget('setting');

        return redirect()->back()->with('flash_message', ('Updated Successfully !'));
    }
}
