<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Logout(){

        Auth::logout();

        return Redirect()->route('login')->with('success', 'User Logged Out Successfully');
    }
}
