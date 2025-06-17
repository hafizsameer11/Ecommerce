<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;

class ShopController extends Controller
{
    public function shop()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $products = Product::all();
        return view('website.pages.shop', compact('products', 'categories', 'subcategories'));
    }

    public function sproducts()
    {
        $products = Product::all();
        return view('website.layouts.footer', compact('products'));
    }

    //     public function category($id)
    // {
    //     $category = Category::findOrFail($id);

    //     $subcategoryIds = Subcategory::where('category_id', $id)->pluck('id');

    //    $products = Product::whereIn('sub_category_id', $subcategoryIds)->get();


    //     $categories = Category::all();
    //     $subcategories = Subcategory::all();

    //     return view('website.pages.shop', compact('products', 'categories', 'subcategories', 'category'));
    // }
    public function category($id)
    {
        // Get the category or fail
        $category = Category::findOrFail($id);

        // Get products that belong directly to this category
        $products = Product::where('category_id', $id)->paginate(10);

        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('website.pages.shop', compact('products', 'categories', 'subcategories', 'category'));
    }

    public function subcategory($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        $products = Product::where('sub_category_id', $id)->paginate(10);

        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('website.pages.shop', compact('products', 'categories', 'subcategories', 'subcategory'));
    }
}
