<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function showHome(){

        $brands_data = Brand::all();
        $sliders_data = Sliders::all();

        return view('home', compact('brands_data', 'sliders_data'));
    }
}
