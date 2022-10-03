<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('_home.home');
});


Route::get('/purchase', function () {
    return view('_purchase.purchase');
});


Route::resource('/product', ProductController::class);

Route::get('/seller', function () {
    return view('_seller.seller');
});

Route::get('/cart', function () {
    return view('_cart.cart');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';