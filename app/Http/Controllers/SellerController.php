<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            return view('_seller.seller', [
                'content' => '_seller.seller_monitor',
            ]);
        } else {
            return redirect()->route('login', [
                'pre_page' => '/seller'
            ]);
        }
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
        $user_id = Auth::user()->code;
        switch ($id) {
            case 'manage_product':
                $get_pdt = DB::select(
                    "SELECT *,  p.code AS product_code
                    FROM products p, product_images pi
                    WHERE p.user_code = '$user_id'
                    AND p.code = pi.product_code
                    AND pi.index = '0'
        "
                );
                $amont_pdt = sizeof($get_pdt);
                return view('_seller.seller', [
                    'content' => '_manage_product.manage_product',
                    'get_pdt' => $get_pdt,
                    'amont_pdt' => $amont_pdt,
                ]);

            case 'monitor':
                return view('_seller.seller', [
                    'content' => '_seller.seller_monitor',
                ]);

            default:
                return "404";
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
        //
    }
}
