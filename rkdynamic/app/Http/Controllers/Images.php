<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Images extends Controller
{
    public function showImages(){

        $all_images = MultiImage::all();


        return view('admin.multimage.index', compact('all_images'));
    }

    public function addImages(Request $request){

        $validation = $request->validate([
            'images'    => 'required|mimes:jpg,jpeg,png'
        ],
        [
            'images.required' => 'Image Field Must not be Empty',
            'images.required'      => 'Image Formate Must Be JPG, JPEG or PNG'
        ]
    );



    $image_files = $request->images;

    foreach ($image_files as $value) {

        
        $image_name = $value->hashName();

        $store_image = $value->store('public/uploads');
    
    
    
        $image_insert = MultiImage::insert([
    
            'image'    => $image_name,
            'created_at'    => Carbon::now(),
        ]);

      }



    return redirect()->back()->with('success', 'Images Uploaded Sucessfully');

}
}
