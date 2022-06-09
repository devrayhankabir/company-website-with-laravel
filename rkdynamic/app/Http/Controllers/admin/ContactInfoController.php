<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function contactInfo(){

        return view('admin.contactinfo.contact_info');
    }
}
