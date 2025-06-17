<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
     public function myaccount(){
        return view('website.pages.my-account') ;
    }
}