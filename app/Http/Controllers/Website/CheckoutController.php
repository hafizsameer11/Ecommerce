<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
      public function checkout(){
        return view('website.pages.checkout') ;
    }
    public function final(){
        return view('website.pages.final') ;
    }
}
