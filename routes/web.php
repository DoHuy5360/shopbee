<?php

use App\Http\Controllers\BuyerpageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::resource('/', BuyerpageController::class);


Route::get('/purchase', function () {
    return view('_purchase.purchase');
});

Route::get('/new-product', function () {
    return view('_new_product.new_product');
});


Route::get('/new-product-detail', function () {
    // echo asset("storage/de.html");
    return 33;
});

Route::post('/new-product-detail', function (Request $request) {
    function getRandom($arr)
    {
        return $arr[array_rand($arr, 1)];
    }
    $random = new stdClass;
    $product_price_arr = [
        "488.539.538.539",
        "942.482.482.244",
        "842.424.133.767"
    ];
    $category_array = explode(',',$request->product_category);
    $product_name = $request->product_name;
    $random->product_price = getRandom($product_price_arr);
    return view('_new_product_detail.new_product_detail', [
        "random" => $random,
        "category_array"=>$category_array,
        "product_name"=>$product_name,
    ]);
});


Route::resource('/product', ProductController::class);

Route::get('/seller', function () {
    return view('_seller.seller');
});

Route::resource('/profile', UserController::class);

Route::resource('/cart', CartController::class);

Route::get('/cart', function () {
    return view('_cart.cart');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
