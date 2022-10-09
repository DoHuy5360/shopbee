<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once('functions/convert.php');
class ProductController extends Controller
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
        $keys = [
            "product_generate_id",
            "product_image",
            "product_price",
            "product_category",
            "product_sold",
            "product_inventory",
            "product_rate",
            "product_star",
            "product_like",
            "product_color",
            "user_address",
            "shop_generate_id",
            "shop_name",
            "shop_rate",
            "shop_response_rate",
            "shop_created_at",
            "shop_follower",
            "shop_response_time",
            "shop_product"
        ];
        $product_info = "1";
        return view('_product.product', [
            'product_infor' => $product_info,
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
        //
    }
}
