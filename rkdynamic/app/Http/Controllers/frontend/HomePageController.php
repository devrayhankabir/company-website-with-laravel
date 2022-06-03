<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class HomePageController extends Controller
{
    public function showHome(){

        $brands_data = Brand::all();
        $sliders_data = Sliders::all();
        $about_us_data = AboutUs::find(1);

        return view('home', compact('brands_data', 'sliders_data', 'about_us_data'));
    }
}
