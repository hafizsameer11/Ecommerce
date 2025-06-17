<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function singleproduct($id){
        $products = Product::all();
        $product = Product::findOrFail($id);
        $variations = ProductVariation::all();
        // dd($product);
        return view('website.pages.single-product', compact('products','product', 'variations')) ;
    }
}
