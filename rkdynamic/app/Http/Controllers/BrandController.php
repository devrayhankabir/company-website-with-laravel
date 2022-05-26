<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AllBrands(){

        $brand_data = Brand::latest()->paginate(5);

        return view('admin.brand.index', compact('brand_data'));
    }

    public function addBrand(Request $request){

        $dataValidation = $request->validate([
            'brand_name'    => 'required|unique:brands|min:3',
            'brand_image'   => 'required|mimes:jpg,jpeg,png'
        ],

        [
            'brand_name.required'   => 'You Must Fill The Brand Name Field',
            'brand_image.required'   => 'Your Must Upload Brand Image',
            'brand_image.mimes'         => 'Brand Image Must Be jpg, jpeg, png Format'
        ]
    );
   
    $brand_name = $request->brand_name;

    $brand_image = $request->file('brand_image')->store('public/images');

    // if (isset($request->brand_image)) {

    //     $img = $request->file('brand_image');
    //     $u_img = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
    //     $img->move(public_path('media/product/'), $u_img);

    //     $image_url = 'media/product/' . $u_img;
    // }


    // $brand_image = $request->file('brand_image')->store('/images');
    // $file_name = $brand_image->getClientOriginalName();
    // $file_extension = $brand_image->getClientOriginalExtension();

    // $fullFileName = $file_name.$file_extension;




    $addBrand = Brand::insert([

        'brand_name'   => $brand_name,
        'brand_image'   => $request->file('brand_image')->hashName(),
        'created_at'    => Carbon::now()

        
    ]);

    return redirect()->back()->with('success', 'Brand Data Inserted Successfully');



    }
}
