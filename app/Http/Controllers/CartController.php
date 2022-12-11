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
        $user_code = Auth::user()->code;
        $get_itm_cart = DB::select(
            "SELECT p.name, p.price, pi.path
                FROM carts c, products p, product_images pi
                WHERE c.user_code = '$user_code'
                AND c.product_code = p.code
                AND pi.product_code = p.code
                AND pi.index = '0'
                "
        );
        // return $get_itm_cart;
        return view('_cart.cart_item', [
            "get_itm_cart" => $get_itm_cart,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $message = "Đã thêm sản phẩm vào giỏ hàng thành công!";
        $status = true;
        if (Auth::user()) {
            $pdt_code = $request->product_code;
            $buyer_code = $request->buyer_code;

            $check_pdt_in_cart = DB::select(
                "SELECT *
                FROM carts c, users u
                WHERE c.product_code = '$pdt_code'
                AND u.code = '$buyer_code'
                "
            );
            // return $check_pdt_in_cart;
            if ($check_pdt_in_cart) {
                $message = "Thêm thất bại, sản phẩm đã tồn tại trong giỏ";
                $status = 'duplicate';
            } else {
                $g_code = genCode(52);
                $add_pdt_cart = new Cart();
                $add_pdt_cart->code = "$g_code";
                $add_pdt_cart->user_code = "$buyer_code";
                $add_pdt_cart->product_code = "$pdt_code";
                $add_pdt_cart->amount = $request->amount_order;
                if (isset($request->classify1)) {
                    $add_pdt_cart->classificationone_code = "$request->classify1";
                    if (isset($request->classify2)) {
                        $add_pdt_cart->classificationtwo_code = "$request->classify2";
                    }
                }
                $add_pdt_cart->save();
            }
        } else {
            $message = "Thêm thất bại, hãy đăng nhập.";
            $status = 'login';
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
        function getGroupProduct($id, $hidden)
        {
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
                    "SELECT *, c.code AS cart_code, p.code AS product_code, hidden, c.amount
                    FROM carts c, products p, product_images pi
                    WHERE c.user_code = '$id'
                    AND c.product_code = p.code
                    AND p.user_code = '$creator->user_code'
                    AND pi.product_code = p.code
                    AND pi.index = '0'
                    AND p.hidden = '$hidden'
                "
                );
                foreach ($get_pdt_cart as $item) {
                    $cls1_ref = "";
                    $cls2_ref = "";
                    if (isset($item->classificationone)) {
                        $cls1_ref = $item->classificationone_code;
                        $cls2_ref = $item->classificationtwo_code;
                    }
                    $get_classification_one = DB::select(
                        "SELECT code, name, path, (SELECT code FROM product_classificationones pc_i WHERE pc_i.code = '$cls1_ref') 
                        AS checked
                        FROM product_classificationones
                        WHERE product_code = '{$item->product_code}'
                        "
                    );
                    $item->classificationones = $get_classification_one;
                    $array_classificationtwos = [];
                    foreach ($get_classification_one as $cls1) {
                        $get_classification_two = DB::select(
                            "SELECT code, classificationone_code, name, price, storage, sku, ( SELECT code FROM product_classificationtwos pc_i WHERE pc_i.code = '$cls2_ref') 
                            AS checked
                            FROM product_classificationtwos
                            WHERE classificationone_code = '{$cls1->code}'
                            "
                        );
                        array_push($array_classificationtwos, $get_classification_two);
                    }
                    $item->classificationtwos = $array_classificationtwos;
                }
                if ($get_pdt_cart) {
                    $get_pdt_creator[$index]->products = $get_pdt_cart;
                } else {
                    unset($get_pdt_creator[$index]);
                }
            }
            return $get_pdt_creator;
        }
        $get_grp_pdt = getGroupProduct($id, 'false');
        $get_grp_pdt_hid = getGroupProduct($id, 'true');
        return view('_cart.cart', [
            'get_grp_pdt' => $get_grp_pdt,
            'get_grp_pdt_hid' => $get_grp_pdt_hid,
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
        $user_code = Auth::user()->code;
        $del_cart_pdt = DB::delete(
            "DELETE 
            FROM carts
            WHERE code = '$id'
            AND user_code = '$user_code'
            "
        );
        if ($del_cart_pdt) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 500
            ]);
        }
    }
}