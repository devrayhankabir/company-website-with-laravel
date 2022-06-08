<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
    public function showIndex(){

        return view('contactPage');
    }
}
