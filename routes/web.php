<?php

use App\Http\Controllers\BuyerpageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/manage-product', function () {
    $user_id = Auth::user()->code;
    $get_pdt = DB::select(
        "SELECT *,  p.code AS product_code
        FROM products p, product_images pi
        WHERE p.user_code = '$user_id'
        AND p.code = pi.product_code
        AND pi.index = '0'
        "
    );
    $amont_pdt = sizeof($get_pdt);
    return view('_manage_product.manage_product', [
        'get_pdt' => $get_pdt,
        'amont_pdt'=>$amont_pdt,
    ]);
});



Route::get('/seller', function () {
    if(Auth::user()){
        return view('_seller.seller');
    }else{
        return redirect()->route('login', [
            'pre_page'=>'/seller'
        ]);
    }
});
Route::resource('/purchase', PurchaseController::class);
Route::resource('/product', ProductController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/cart', CartController::class);

Route::get('/dashboard', function () {
    return date('D - d/m/Y - H:i:s - A');

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
