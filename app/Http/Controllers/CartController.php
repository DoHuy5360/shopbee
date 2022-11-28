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
    public function create(Request $request)
    {
        if ($request->id === Auth::user()->code) {
            $get_itm_cart = DB::select(
                "SELECT p.name, p.price, pi.path
                FROM carts c, products p, product_images pi
                WHERE c.user_code = '$request->id'
                AND c.product_code = p.code
                AND pi.product_code = p.code
                AND pi.index = '0'
                "
            );
            // return $get_itm_cart;
            return view('_cart.cart_item', [
                "get_itm_cart" => $get_itm_cart,
            ]);
        }else{
            return '<b>Đây không phải giỏ hàng của bạn</b>';
        }
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
        // return Auth::user()->code;
        // return $request;
        $get_pdt_creator = DB::select(
            "SELECT DISTINCT p.user_code, u.name
            FROM carts c, products p, users u
            WHERE c.user_code = '$id'
            AND c.product_code = p.code
            AND p.user_code = u.code
            "
        );
        // return $get_pdt_creator;
        foreach ($get_pdt_creator as $index => $creator) {
            $get_pdt_cart = DB::select(
                "SELECT *, c.code AS cart_code, p.code AS product_code
                FROM carts c, products p, product_images pi
                WHERE c.user_code = '$id'
                AND c.product_code = p.code
                AND p.user_code = '$creator->user_code'
                AND pi.product_code = p.code
                AND pi.index = '0'
                "
            );
            foreach ($get_pdt_cart as $item) {
                $get_classification_one = DB::select(
                    "SELECT code, name, path
                        FROM product_classificationones
                        WHERE product_code = '{$item->product_code}'
                        "
                );
                $item->classificationones = $get_classification_one;
                $array_classificationtwos = [];
                foreach ($get_classification_one as $cls1) {
                    $get_classification_two = DB::select(
                        "SELECT classificationone_code, name, price, storage, sku
                            FROM product_classificationtwos
                            WHERE classificationone_code = '{$cls1->code}'
                            "
                    );
                    array_push($array_classificationtwos, $get_classification_two);
                }
                $item->classificationtwos = $array_classificationtwos;
            }
            $get_pdt_creator[$index]->products = $get_pdt_cart;
        }
        // return $get_pdt_creator;

        
        return view('_cart.cart', [
            'get_pdt_creator' => $get_pdt_creator,
        ]);
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
