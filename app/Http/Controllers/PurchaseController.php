<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillProduct;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

require_once('functions/code_generate.php');
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_code = Auth::user()->code;
        $get_user = DB::select(
            "SELECT *
            FROM users
            WHERE code = '$user_code'
            "
        )[0];
        $get_bill_pdt = DB::select(
            "SELECT u.name AS owner_name, 
                    bp.name AS product_name, 
                    path, 
                    bp.total AS product_total, 
                    amount,
                    status
            FROM bills b, bill_products bp, users u
            WHERE b.buyer_code = '$user_code'
            AND b.code = bp.bill_code
            AND u.code = b.buyer_code
            ORDER BY bp.id DESC
            "
        );
        $arr_status = [
            "wait_confirm",
            "wait_get",
            "delivering",
            "delivered",
            "cancel",
            "refund",
        ];
        $amount_order = [];
        $amount_order['all'] = 0;
        foreach ($arr_status as $index => $status) {
            $get_amount_each_status = DB::select(
                "SELECT COUNT(*) AS count
                FROM bill_products bp, bills b
                WHERE status = '$status'
                AND bp.bill_code = b.code
                AND b.buyer_code = '$user_code'
                "
            )[0];
            $amount_order[$status] = $get_amount_each_status->count;
            $amount_order['all'] += $get_amount_each_status->count;
        }
        // return $get_bill_pdt;
        return view('_purchase.purchase_process_full', [
            'get_user' => $get_user,
            'get_bill_pdt' => $get_bill_pdt,
            'amount_order' => $amount_order,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request;
        $user_code = Auth::user()->code;
        $get_user_address = DB::select(
            "SELECT *
            FROM user_addresses
            WHERE user_code = '$user_code'
            AND default_address = 'true'
            "
        );
        if (isset($get_user_address[0])) {
            $get_user_address = $get_user_address[0];
        } else {
            $get_user_address = null;
        }
        // return $request;
        $array_pdt_slc = [];
        $total_price = 0;
        foreach ($request->product_information as $creator) {
            $sum_price_each = 0;
            $sum_amount = 0;
            foreach ($creator['products'] as $index_item => $item) {
                if (isset($item['checked'])) {
                    $sum_amount += (int)$item['amount'];
                    $sum_price = (int)$item["price"] * (int)$item["amount"];
                    $creator['products'][$index_item]["sum_price"] = $sum_price;
                    $total_price += $sum_price;
                    $sum_price_each += $sum_price;
                } else {
                    unset($creator['products'][$index_item]);
                }
            }
            $creator["total_price"] = $sum_price_each;
            $creator["sum_amount"] = $sum_amount;
            if (sizeOf($creator['products']) > 0) {
                array_push($array_pdt_slc, $creator);
            }
        }
        // return $array_pdt_slc;
        return view('_purchase.purchase', [
            'array_pdt_slc' => $array_pdt_slc,
            'total_price' => $total_price,
            'get_user_address' => $get_user_address,
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
        $user_code = Auth::user()->code;
        // return $user_code;
        $bill_code = genCode(52);
        $add_bill = new Bill();
        $add_bill->code = $bill_code;
        $add_bill->buyer_code = Auth::user()->code;
        $add_bill->total = $request->product_total;
        $add_bill->save();
        if ($add_bill) {
            foreach ($request->product_information as $item) {
                foreach ($item['products'] as $product) {
                    $pdt_code = $product["product_code"];
                    $add_pdt_bill = new BillProduct();
                    $add_pdt_bill->code = genCode(52);
                    $add_pdt_bill->bill_code = $bill_code;
                    $add_pdt_bill->product_code = $pdt_code;
                    $add_pdt_bill->name = $product["product_name"];
                    $add_pdt_bill->path = $product["image"];
                    $add_pdt_bill->price = $product["price"];
                    $add_pdt_bill->amount = $product["amount"];
                    $add_pdt_bill->total = $product["sum_price"];
                    $add_pdt_bill->save();

                    if ($add_pdt_bill) {
                        DB::delete(
                            "DELETE 
                            FROM carts
                            WHERE product_code = '$pdt_code'
                            AND user_code = '$user_code'
                            "
                        );
                    }
                }
            }
        }
        return redirect()->route("profile.show", 'order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // return $request;
        if ($id == Auth::user()->code) {
            $get_user = DB::select(
                "SELECT *
                FROM users
                WHERE code = '$id'
                "
            )[0];

            if ($request->status == 'all') {
                $get_bill_pdt = DB::select(
                    "SELECT u.name AS owner_name, 
                            bp.name AS product_name, 
                            bp.total AS product_total, 
                            bp.product_code AS product_code,
                            path, 
                            amount,
                            status
                    FROM bills b, bill_products bp, users u
                    WHERE b.buyer_code = '$id'
                    AND b.code = bp.bill_code
                    AND u.code = b.buyer_code
                    ORDER BY bp.id DESC
                    "
                );
                // return $get_bill_pdt;
                return view('_purchase.purchase_process', [
                    'get_user' => $get_user,
                    'get_bill_pdt' => $get_bill_pdt,
                    'isHack' => false,
                ]);
            } else {
                $get_bill_pdt = DB::select(
                    "SELECT u.name AS owner_name, 
                            bp.name AS product_name, 
                            bp.total AS product_total, 
                            bp.product_code AS product_code,
                            path, 
                            amount,
                            status
                    FROM bills b, bill_products bp, users u
                    WHERE b.buyer_code = '$id'
                    AND b.code = bp.bill_code
                    AND u.code = b.buyer_code
                    AND bp.status = '$request->status'
                    ORDER BY bp.id DESC
                    "
                );
                // return $get_bill_pdt;
                return view('_purchase.purchase_process', [
                    'get_user' => $get_user,
                    'get_bill_pdt' => $get_bill_pdt,
                    'isHack' => true,
                    'current_status' => $request->status,
                ]);
            }
        } else {
            return redirect()->back();
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
        // return $request;
        $arr_status = [
            "wait_confirm",
            "wait_get",
            "delivering",
            "delivered",
            "cancel",
            "refund",
        ];
        $crnt_sts_idx = array_search($request->current_status, $arr_status);
        $new_status = "---";

        if ($request->action == "hack_next") {
            $new_status = $arr_status[$crnt_sts_idx + 1];
        } else if ($request->action == "hack_back") {
            $new_status = $arr_status[$crnt_sts_idx - 1];
        } else {
            $new_status = $request->current_status;
        }
        $update_bill_pdt = DB::update(
            "UPDATE bill_products
            SET status = '$new_status'
            WHERE product_code = '$request->product_code'
            "
        );
        if ($update_bill_pdt) {
            $arr_status = [
                "wait_confirm",
                "wait_get",
                "delivering",
                "delivered",
                "cancel",
                "refund",
            ];
            $amount_order = [];
            $total_status = 0;
            foreach ($arr_status as $index => $status) {
                $get_amount_each_status = DB::select(
                    "SELECT COUNT(*) AS count
                    FROM bill_products
                    WHERE status = '$status'
                    "
                )[0];
                array_push($amount_order, $get_amount_each_status->count);
                $total_status += (int)$get_amount_each_status->count;
            }
            array_unshift($amount_order, $total_status);
            return $amount_order;
        } else {
            return $update_bill_pdt;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
