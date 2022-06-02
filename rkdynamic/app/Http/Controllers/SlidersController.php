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


    public function editSlider($id){

        $slider_id = Sliders::find($id);

        return view('admin.sliders.edit', compact('slider_id'));
    }

    public function udpateSlider(Request $request, $id){

        $validation = $request->validate([
            'slider_image'  => 'mimes:jpg,jpeg,png',
        ],
        [
            'slider_image.mimes'      => 'Image Format Must Be JPG, JPEG Or Png',
        ]
        );

        $get_title = $request->slider_title;
        $get_desc  = $request->slider_desc;
        $get_image_file  = $request->file('slider_image');
        $get_btn_link  = $request->slider_btn;

        $get_old_img_path = $request->old_img;

        $image_store = $get_image_file->store('public/images/sliders');
        $get_image_path = $get_image_file->hashName();

        unlink('storage/images/sliders/'.$get_old_img_path);





        $update_data = Sliders::find($id)->update([

            'slider_title'      =>$get_title,
            'slider_desc'      =>$get_desc,
            'slider_bg'      =>$get_image_path,
            'slider_btn_link'      =>$get_btn_link,
            'created_at'            =>Carbon::now(),

        ]);

        return redirect()->route('all.sliders')->with('success', 'Slider Data Updated Successfully');




    }

    public function deleteSlider($id){

        $old_image = Sliders::find($id);
        $image_path = $old_image->slider_bg;

        unlink('storage/images/sliders/'.$image_path);

        $delete_slider_data = Sliders::find($id)->delete();

        return redirect()->route('all.sliders')->with('success', 'Slider Data Deleted Successfully');
    }
}
