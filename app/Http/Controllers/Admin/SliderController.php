<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sliders\StoreSliderRequest;
use App\Http\Requests\Backend\Sliders\UpdateSliderRequest;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }


    public function store(StoreSliderRequest $request)
    {

        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/sliders';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/sliders/' . $image_name;
        }

        $slider = Slider::create([

            'title'        => $request->title,
            'image'        => $image_in_db,

        ]);

        if ($slider) {

            return redirect()->route('admin.sliders.index')->with('success', 'Successfully Created Slider'); //
        }
    }


    public function show($id)
    {
        $slider = Slider::find($id);

        return view('admin.sliders.show', compact('slider'));
    }


    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.sliders.edit', compact('slider'));
    }


    public function update(UpdateSliderRequest $request, $id)
    {

        $slider = Slider::find($id);
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/sliders';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/sliders/' . $image_name;
        } else {
            $image_in_db = $slider->image;
        }

        $slider->update([

            'title'        => $request->title,
            'image'        => $image_in_db,

        ]);

        if ($slider) {

            return redirect()->route('admin.sliders.index')->with('success', 'Successfully Updated Slider'); //
        }
    }


    public function delete($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('error', 'Successfully Deleted Slider'); //
    }
}
