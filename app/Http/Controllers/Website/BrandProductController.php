<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandProductController extends Controller
{
     public function brandproduct(){
        return view('website.pages.shortcode-brand-product') ;
    }
}