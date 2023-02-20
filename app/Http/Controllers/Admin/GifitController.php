<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Gifit\StoreGifitRequest;
use App\Http\Requests\Backend\Gifit\UpdateGifitRequest;
use Illuminate\Http\Request;
use App\Models\Gifit;

class GifitController extends Controller
{

    public function index()
    {
        $gifit = Gifit::first();
        return view('admin.gifits.index', compact('gifit'));
    }

    public function update(UpdateGifitRequest $request)
    {
         $gifit = Gifit::first();

         $image_in_db = NULL;
         if ($request->has('image')) {
             $path = public_path() . '/uploads/gifits';
             $image = request('image');
             $image_name = time() . request('image')->getClientOriginalName();
             $image->move($path, $image_name);
             $image_in_db = '/uploads/gifits/' . $image_name;
         } else {

             $image_in_db = $gifit->image;
         }
        $gifit->update([

            'description'  => $request->description,
            'image'        => $image_in_db,

        ]);

        if ($gifit) {

            return redirect()->route('admin.gifits.index')->with('success', 'Successfully Updated Gifit'); //
        }
    }
}
