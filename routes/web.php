<?php

use App\Http\Controllers\BuyerpageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserController;
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
Route::resource('/manage_product', ManageProductController::class)->middleware(['auth']);
Route::resource('/monitor', MonitorController::class)->middleware(['auth']);
Route::resource('/seller', SellerController::class)->middleware(['auth']);
Route::resource('/purchase', PurchaseController::class)->middleware(['auth']);
Route::resource('/product', ProductController::class)->middleware(['auth']);
Route::resource('/profile', ProfileController::class)->middleware(['auth']);
Route::resource('/cart', CartController::class)->middleware(['auth']);
Route::resource('/user', UserController::class)->middleware(['auth']);
Route::resource('/user_address', UserAddressController::class)->middleware(['auth']);

Route::get('/manage_order', function () {

    $user_code = Auth::user()->code;
    $get_bill = DB::select(
        "SELECT *, p.name AS product_name
        FROM bills b, bill_products bp, products p
        WHERE b.code = bp.bill_code
        AND p.code = bp.product_code
        AND p.user_code = '$user_code'
        "
    );
    $amnt_bill = sizeOf($get_bill);
    return view('_seller.seller_order', [
        'amnt_bill' => $amnt_bill,
        'get_bill' => $get_bill,
    ]);
});

Route::get('/dashboard', function () {
    return date('D - d/m/Y - H:i:s - A');

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
