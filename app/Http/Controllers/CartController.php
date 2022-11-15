<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

require_once('functions/code_generate.php');
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = "Đã thêm sản phẩm vào giỏ hàng thành công!";
        $status = 200;
        if (Auth::user()) {
            $g_code = genCode(52);
            $add_pdt_cart = new Cart();
            $add_pdt_cart->code = $g_code;
            $add_pdt_cart->user_code = $request->buyer_code;
            $add_pdt_cart->product_code = $request->product_code;
            $add_pdt_cart->save();
        } else {
            $message = "Thêm thất bại, hãy đăng nhập.";
            $status = 500;
        }
        return response()->json([
            "status" => $status,
            "message" => $message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $action = $request->query("action");
        if ($action === "watch") {
            $get_itm_cart = DB::select(
                "SELECT p.name, p.price, pi.path
                FROM carts c, products p, product_images pi
                WHERE c.user_code = '$id'
                AND c.product_code = p.code
                AND pi.product_code = p.code
                AND pi.index = '0'
                "
            );
            return view('_cart.cart_item', [
                "get_itm_cart" => $get_itm_cart,
            ]);
        } else {
            $get_itm_cart = DB::select(
                "SELECT *, c.code AS cart_code, u.name AS user_name
                FROM users u, carts c, products p, product_images pi
                WHERE c.user_code = '$id'
                AND u.code = p.user_code
                AND c.product_code = p.code
                AND pi.product_code = p.code
                AND pi.index = '0'
                "
            );
            // return $get_itm_cart;
            return view('_cart.cart', [
                'get_itm_cart' => $get_itm_cart,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete(
            "DELETE FROM carts
            WHERE code = '$id'
            "
        );
        return response()->json([
            "status" => 200
        ]);
    }
}