<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'subcategory'])->paginate(10);;
        return view('admin.pages.products.all_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.pages.products.add_product', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'discount_price' => 'nullable|string|max:255',
            'rating' => 'nullable|integer|min:1|max:5',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'sub_category_id' => 'nullable|exists:subcategories,id',
        ]);

        // Upload featured image
        $imageName = null;
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
        }

        // Upload multiple images
        $multiImageNames = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $multiImage) {
                if ($multiImage->isValid()) {
                    $multiImageName = time() . '_' . uniqid() . '.' . $multiImage->getClientOriginalExtension();
                    $multiImage->move(public_path('uploads/products'), $multiImageName);
                    $multiImageNames[] = $multiImageName;
                }
            }
        }

        $ratingStars = $request->rating ? str_repeat('★', $request->rating) : null;

        Product::create([
            'featured_image' => $imageName,
            'images' => json_encode($multiImageNames),
            'title' => $request->title,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'rating' => $ratingStars,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
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
    public function edit(string $id)
    {

        $product = Product::findOrFail($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.pages.products.update_product', compact('product', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'title'             => 'required|string|max:255',
            'price'             => 'required',
            'discount_price'    => 'required',
            'rating'            => 'nullable|numeric|min:1|max:5',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'category_id'       => 'required|exists:categories,id',
            'sub_category_id'   => 'required|exists:subcategories,id',
            'featured_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Handle featured image
        $imagePath = $product->featured_image;
        if ($request->hasFile('featured_image')) {
            if ($product->featured_image && file_exists(public_path('uploads/products/' . $product->featured_image))) {
                unlink(public_path('uploads/products/' . $product->featured_image));
            }

            $image = $request->file('featured_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products'), $imageName);
            $imagePath = $imageName;
        }

        // Handle multiple new images (append to existing)
        $existingImages = $product->images ?? [];
        if (is_string($existingImages)) {
            $existingImages = json_decode($existingImages, true);
        }

        $newImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $multiImage) {
                if ($multiImage->isValid()) {
                    $multiImageName = time() . '_' . uniqid() . '.' . $multiImage->getClientOriginalExtension();
                    $multiImage->move(public_path('uploads/products/multiple'), $multiImageName);
                    $newImages[] = $multiImageName;
                }
            }
        }

        $allImages = array_merge($existingImages, $newImages);

        // Convert rating to stars
        $ratingStars = $request->rating ? str_repeat('★', $request->rating) : null;

        // Update product
        $product->update([
            'title'             => $request->title,
            'price'             => $request->price,
            'discount_price'    => $request->discount_price,
            'rating'            => $ratingStars,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'category_id'       => $request->category_id,
            'sub_category_id'   => $request->sub_category_id,
            'featured_image'    => $imagePath,
            'images'            => json_encode($allImages),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        @unlink(public_path('uploads/products/' . $product->featured_image));

        foreach (json_decode($product->images ?? '[]') as $img) {
            @unlink(public_path('uploads/products/multiple/' . $img));
        }

        $product->delete();

        return back()->with('success', 'Product deleted!');
    }
}
