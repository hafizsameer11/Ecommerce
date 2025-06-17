<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);
        $cartItems = collect($cart);

        $totalAmount = $cartItems->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('website.pages.cart', compact('cartItems', 'totalAmount'));
    }
    public function update(Request $request, $id)
{
    $cart = session()->get('cart', []);
    if (!isset($cart[$id])) return back();

    if ($request->action === 'increase') {
        $cart[$id]['quantity']++;
    } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
        $cart[$id]['quantity']--;
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Cart updated successfully');
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);
    unset($cart[$id]);
    session()->put('cart', $cart);

    return back()->with('success', 'Item removed');
}
public function bulkUpdate(Request $request)
{
    $quantities = $request->input('quantities', []);
    $cart = session()->get('cart', []);

    foreach ($quantities as $id => $qty) {
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, (int) $qty);
        }
    }

    session()->put('cart', $cart);

    return back()->with('success', 'Cart updated successfully!');
}




}
