<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
     public function testimonial(){
        return view('website.pages.shortcode-testimonial') ;
    }
}