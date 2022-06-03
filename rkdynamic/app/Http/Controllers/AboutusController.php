<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutusController extends Controller
{
    public function aboutUs(){

        $current_data = AboutUs::find(1);

        return view('admin.aboutus.index', compact('current_data'));
    }

    public function saveChanges(Request $request){

        $title = $request->title;
        $sub_title = $request->sub_title;
        $long_desc = $request->long_desc;
        $list_description = $request->list_desc;
        $short_description = $request->short_desc;

        $save_changes = AboutUs::find(1)->update([

            'title'    =>$title,
            'sub_title'    =>$sub_title,
            'long_desc'    =>$long_desc,
            'line_desc'    =>$list_description,
            'short_desc'    =>$short_description,

        ]);

        return redirect()->back()->with('success', 'About US Data Saved!');
    }
}
