<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function service(){
        return view('website.pages.shortcode-service') ;
    }
}