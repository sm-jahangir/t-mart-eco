<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [FrontendHomeController::class, 'index'])->name('frontend');
// Route::view('shop', 'frontend.products.products');
Route::view('contact', 'frontend.contact');
Route::view('cart', 'frontend.cart');
Route::view('blog', 'frontend.blog');
Route::view('checkout', 'frontend.checkout');
Route::view('single-blog', 'frontend.single-blog');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/category', [FrontendHomeController::class, 'allcategory'])->name('category.all');
Route::get('/category/{slug}', [FrontendHomeController::class, 'categorybyproduct'])->name('category.by.product');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/addtocart/{id}', [CartController::class, 'storeCart'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('cart-update/{id}', [CartController::class, 'update'])->name('cart-update');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/check', [CartController::class, 'check']);

// Wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index'); //show
Route::get('/addtowishlist/{id}', [WishlistController::class, 'storeCart'])->name('wishlist.store'); //store
Route::delete('/wishlist/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove'); //remove
Route::get('/wishlist/destroy', [WishlistController::class, 'destroy'])->name('wishlist.destroy'); //destroy all
Route::post('/movetocart/{id}', [WishlistController::class, 'moveProductWishlistToCart'])->name('move.cart');
// Saved For Later Cart Instance
Route::post('/addtosaveforlater/{id}', [CartController::class, 'storeSavedforLater'])->name('cart.storeSavedforLater');
Route::get('/destroysavedforLater', [CartController::class, 'destroysavedforLater'])->name('cart.destroysavedforLater'); //Destroy
Route::delete('/cart/saveforlaterremove/{id}', [CartController::class, 'saveforlaterremove'])->name('cart.saveforlaterremove'); //Remove
Route::post('/movesavedforlatertocart/{id}', [CartController::class, 'moveProductSaveforlaterToCart'])->name('move.moveProductSaveforlaterToCart'); // Move to Cart

Route::post('coupon/apply', [CartController::class, 'applyCouponCode'])->name('apply.coupon');

// Route::view('checkout', 'frontend.checkout')->name('checkout');
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('place/order', [CheckoutController::class, 'placeorder'])->name('place.order');
Route::view('thank-you', 'frontend.thank-you')->name('order.thank-you');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('user/dashboard', 'frontend.dashboard.dashboard');

Route::get('user/dashboard', [OrderController::class, 'orders'])->name('user.orders');

Route::get('user/order/details/{id}', [OrderController::class, 'details'])->name('user.orders.details');
