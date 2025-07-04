<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('website.home', compact('products'));
    }
}
