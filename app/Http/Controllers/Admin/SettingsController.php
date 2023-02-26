<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Settings\UpdateSettingsRequest;
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


    public function update(UpdateSettingsRequest $request)
    {

        $setting = Settings::first();

        $logo_in_db = NULL;
        if ($request->has('logo')) {

            $path = public_path() . '/uploads/settings';
            $logo = request('logo');
            $logo_name = time() . request('logo')->getClientOriginalName();
            $logo->move($path, $logo_name);
            $logo_in_db = '/uploads/settings/' . $logo_name;
        } else {
            $logo_in_db = $setting->logo;
        }
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/settings';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/settings/' . $image_name;
        } else {
            $image_in_db = $setting->image;
        }
        //main image
        $main_image_in_db = NULL;
        if ($request->has('main_image')) {
            $path = public_path() . '/uploads/settings';
            $main_image = request('main_image');
            $main_image_name = time() . request('main_image')->getClientOriginalName();
            $main_image->move($path, $main_image_name);
            $main_image_in_db = '/uploads/settings/' . $main_image_name;
        } else {
            $main_image_in_db = $setting->main_image;
        }


        $setting->title         =   $request->title;
        $setting->description   =   $request->description;
        $setting->email         =   $request->email;
        $setting->phone         =   $request->phone;
        $setting->address       =   $request->address;
        $setting->start_from    =   $request->start_from;
        $setting->end_at        =   $request->end_at;
        $setting->facebook_link =   $request->facebook_link;
        $setting->twitter_link  =   $request->twitter_link;
        $setting->linkedin_link  =   $request->linkedin_link;
        $setting->youtube_link  =   $request->youtube_link;
        $setting->dribble_link  =   $request->dribble_link;
        $setting->vimeo_link    =   $request->vimeo_link;
        $setting->behance_link  =   $request->behance_link;
        $setting->instagram_link =   $request->instagram_link;
        $setting->logo          =   $logo_in_db;
        $setting->image         =   $image_in_db;
        $setting->main_image    =   $main_image_in_db;

        $setting->save();
        Cache::forget('setting');
        return redirect()->back()->with('success', 'Settings Updated Successfully');
    }
}
