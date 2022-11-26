<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $array_pdt_slc = [];
        $total_price = 0;
        $amount_pdt = 0;
        foreach($request->product_item as $index=>$item){
            $single_item = $request->product_item[$index];
            if(isset($item['checked'])){
                $amount_pdt += (int)$item['amount'];
                $sum_price = (int)$item["price"] * (int)$item["amount"];
                $single_item["sum_price"] = $sum_price;
                $total_price += $sum_price;
                array_push($array_pdt_slc, $single_item);
            }
        }
        // return $array_pdt_slc;
        return view('_purchase.purchase', [
            'array_pdt_slc'=>$array_pdt_slc,
            'total_price'=>$total_price,
            'amount_pdt'=>$amount_pdt,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
