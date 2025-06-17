<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $cart = session()->get('cart', []);
            $cartItems = collect($cart);
            $cartCount = $cartItems->sum('quantity');
            $cartTotal = $cartItems->sum(function ($item) {
                return $item['price'] * $item['quantity'];
            });

            $view->with([
                'cartItems' => $cartItems,
                'cartCount' => $cartCount,
                'cartTotal' => $cartTotal,
            ]);
        });
    }

}
