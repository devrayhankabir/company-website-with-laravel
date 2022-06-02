<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Sliders;

class SlidersController extends Controller
{
    public function showSliders(){

        $sliders_data = Sliders::all();

        return view('admin.sliders.index', compact('sliders_data'));
    }

    public function addSlider(){

        return view('admin.sliders.add');
    }

    public function storeSlider(Request $request){

        $formValidation = $request->validate([

            'slider_title'      =>'required',
            'slider_desc'       =>'required',
            'slider_image'      =>'required|mimes:png,jpg,jpeg',
            'slider_btn'        =>'required'
        ],
        [
            'slider_title.required'     => 'You Must Fill The Slider Title',
            'slider_desc.required'     => 'You Must Fill The Slider Description',
            'slider_image.required'     => 'You Must Upload The Slider Image',
            'slider_image.mimes'     => 'Slider Image Format Must Be JPG, JPEG Or PNG',
        ]
        );

        $sliders_title = $request->slider_title;
        $sliders_desc = $request->slider_desc;
        $sliders_image = $request->file('slider_image');
        $sliders_btn = $request->slider_btn;

        $store_bg_image = $sliders_image->store('public/images/sliders');

        $bg_image_path = $sliders_image->hashName();


        $insert_slider_data = Sliders::insert([
            'slider_title'      =>$sliders_title,
            'slider_desc'      =>$sliders_desc,
            'slider_bg'      =>$bg_image_path,
            'slider_btn_link'      =>$sliders_btn,
            'created_at'        =>Carbon::now(),
        ]);



        return redirect()->route('all.sliders')->with('success', 'Slider Data Inserted Successfully');

    }
}
