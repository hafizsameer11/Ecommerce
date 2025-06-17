<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $subcategories = SubCategory::latest()->paginate(10); // ✅ Paginated data
    $categories = Category::all();

    return view('admin.pages.subcategory.all_subcategory', compact('subcategories', 'categories'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $categories = Category::all(); // Fetch all categories
    return view('admin.pages.subcategory.add_subcategory', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'nullable|string|max:255|unique:subcategories,slug'
        ]);

        Subcategory::create($validated);

        return redirect()->route('subcategory.index')
                         ->with('success', 'Subcategory created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        return view('admin.subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $subcategory = SubCategory::findOrFail($id);
    $categories = Category::all();
    return view('admin.pages.subcategory.update_subcategory', compact('subcategory', 'categories'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'nullable|string|max:255|unique:subcategories,slug,'.$subcategory->id
        ]);

        $subcategory->update($validated);

        return redirect()->route('subcategory.index')
                         ->with('success', 'Subcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategory.index')
                         ->with('success', 'Subcategory deleted successfully');
    }
}