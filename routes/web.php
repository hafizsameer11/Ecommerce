<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CartController as AdminCartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariationController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\BrandProductController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\LoginController;
use App\Http\Controllers\Website\MyAccountController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\ShopController;
use App\Http\Controllers\Website\SingleProductController;
use App\Http\Controllers\Website\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// website
Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/blog',[BlogController::class,'blog'])->name('blog');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/shop',[ShopController::class,'shop'])->name('shop');

Route::get('/shop_category/{id}', [ShopController::class, 'category'])->name('category.products');
Route::get('/shop_category/subcategory/{id}', [ShopController::class, 'subcategory'])->name('subcategory.products');

Route::get(uri: '/sproducts',action: [ShopController::class,'sproducts'])->name('sproducts');


Route::get('/brandproduct',[BrandProductController::class,'brandproduct'])->name('brandproduct');

Route::get('/service',[ServiceController::class,'service'])->name('service');

Route::get('/testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');

Route::get('/contact',[ContactController::class,'contact'])->name('contact');

Route::get('/login',[LoginController::class,'login'])->name('login');

Route::get('/myaccount',[MyAccountController::class,'myaccount'])->name('myaccount');

Route::get('/singleproduct/{id}',[SingleProductController::class,'singleproduct'])->name('singleproduct');

Route::get('/cart',[CartController::class,'cart'])->name('cart.view');

Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::get('/final',[CheckoutController::class,'final'])->name('final');

Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');


Route::post('/add-to-cart', [AdminCartController::class, 'addToCart'])->name('cart.add');
// Route::get('/cart', [AdminCartController::class, 'viewCart'])->name('cart.view');
// Route::get('/cart/remove/{id}', [AdminCartController::class, 'removeFromCart'])->name('cart.remove');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update-all', [CartController::class, 'bulkUpdate'])->name('cart.bulkUpdate');

// admin

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');


Route::resource('category', CategoryController::class);

Route::resource('subcategory', SubCategoryController::class);

Route::resource('products', ProductController::class);

Route::resource('productvariation', ProductVariationController::class);
