<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $variations = ProductVariation::with('product')->paginate(10);
    return view('admin.pages.product_variation.all_variation', compact('variations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $products = Product::all();
    return view('admin.pages.product_variation.add_variation', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'product_id' => 'required|exists:products,id',
        'color' => 'nullable|string|max:50',
        'size' => 'nullable|string|max:50',
        'sku' => 'nullable|string|max:100',
        'additional_price' => 'nullable|numeric',
    ]);

    // Create product variation
    ProductVariation::create([
        'product_id' => $request->product_id,
        'color' => $request->color,
        'size' => $request->size,
        'sku' => $request->sku,
        'additional_price' => $request->additional_price,
    ]);

    // Redirect back with success
    return redirect()->route('productvariation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
        $variation = ProductVariation::findOrFail($id);

    $products = Product::all();

    return view('admin.pages.product_variation.update_variation', compact('variation', 'products'));
   
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'product_id' => 'required',
        'color' => 'nullable|string|max:50',
        'size' => 'nullable|string|max:50',
        'sku' => 'nullable|string|max:100',
        'additional_price' => 'nullable|numeric',
    ]);

    $variation = ProductVariation::findOrFail($id);

    $variation->update([
        'product_id' => $request->product_id,
        'color' => $request->color,
        'size' => $request->size,
        'sku' => $request->sku,
        'additional_price' => $request->additional_price,
    ]);

    return redirect()->route('productvariation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variation = ProductVariation::findOrFail($id);
    $variation->delete();

    return redirect()->route('productvariation.index');
    }
}