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
    public function index(Request $request)
    {
        $get_user = DB::select(
            "SELECT *
             FROM users
             WHERE code = '$request->user_code'
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
            WHERE b.buyer_code = '$request->user_code'
            AND b.code = bp.bill_code
            AND u.code = b.buyer_code
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
                "SELECT COUNT(*)
                FROM bill_products
                WHERE status = '$status'
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
        return $request;
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
        return "Route store";
        $bill_code = genCode(52);
        $add_bill = new Bill();
        $add_bill->code = $bill_code;
        $add_bill->buyer_code = Auth::user()->code;
        $add_bill->total = $request->product_total;
        $add_bill->save();
        foreach ($request->product_information as $item) {
            foreach ($item['products'] as $product) {
                $add_pdt_bill = new BillProduct();
                $add_pdt_bill->code = genCode(52);
                $add_pdt_bill->bill_code = $bill_code;
                $add_pdt_bill->product_code = $product["product_code"];
                $add_pdt_bill->name = $product["product_name"];
                $add_pdt_bill->path = $product["image"];
                $add_pdt_bill->price = $product["price"];
                $add_pdt_bill->amount = $product["amount"];
                $add_pdt_bill->total = $product["sum_price"];
                $add_pdt_bill->save();
            }
        }
        return $request;
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

        // if ($id == Auth::user()->code) {
        // } else {
        //     return redirect()->back();
        // }
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
        $current_status_index = array_search($request->current_status, $arr_status);
        $new_status = "---";

        if ($request->action == "hack_next") {
            $new_status = $arr_status[$current_status_index + 1];
        } else {
            $new_status = $arr_status[$current_status_index - 1];
        }
        $update_bill_pdt = DB::update(
            "UPDATE bill_products
            SET status = '$new_status'
            WHERE product_code = '$request->product_code'
            "
        );
        if ($update_bill_pdt) {
            $arr_status = [
                "all",
                "wait_confirm",
                "wait_get",
                "delivering",
                "delivered",
                "cancel",
                "refund",
            ];
            $amount_order = [];
            foreach ($arr_status as $index => $status) {
                $get_amount_each_status = DB::select(
                    "SELECT COUNT(*)
                    FROM bill_products
                    WHERE status = '$status'
                    "
                )[0];
                array_push($amount_order, $get_amount_each_status->count);
            }
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
