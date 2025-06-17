<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity ?? 1;

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $product = Product::findOrFail($productId);
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image" => $product->featured_image
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['message' => 'Product added to cart successfully!']);
    }
    public function addToWishlist(Request $request)
    {
        $productId = $request->product_id;

        $wishlist = session()->get('wishlist', []);

        if (!in_array($productId, $wishlist)) {
            $wishlist[] = $productId;
            session()->put('wishlist', $wishlist);
        }
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
        // return respo÷nse()->json(['message' => 'Added to wishlist']);
    }
    public function removeFromCart($productId)
    {
        $cart = session()->get('cart');
        unset($cart[$productId]);
        session()->put('cart', $cart);
        return back()->with('success', 'Item removed from cart');
    }
}
