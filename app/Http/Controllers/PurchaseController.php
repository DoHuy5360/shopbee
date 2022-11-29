<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillProduct;
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
        //
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
        // return $request;
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
    public function show($id)
    {
        $get_user = DB::select(
            "SELECT *
             FROM users
             WHERE code = '$id'
            "
        )[0];
        return view('_purchase.purchase_process', [
            'get_user' => $get_user,
        ]);

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
        //
    }
}
