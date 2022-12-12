<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->code;
        $get_pdt = DB::select(
            "SELECT p.code AS product_code,
                    p.name AS product_name,
                    path,
                    hidden,
                    sku_code,
                    price,
                    storage,
                    sold
            FROM products p, product_images pi
            WHERE p.classificationone IS NULL
            AND p.user_code = '$user_id'
            AND p.code = pi.product_code
            AND pi.index = '0'
            ORDER BY p.id DESC
            "
        );
        $get_pdt_cls = DB::select(
            "SELECT p.code AS product_code,
                    p.name AS product_name,
                    path,
                    hidden,
                    sku_code,
                    price,
                    storage,
                    sold
            FROM products p, product_images pi
            WHERE p.classificationone IS NOT NULL
            AND p.user_code = '$user_id'
            AND p.code = pi.product_code
            AND pi.index = '0'
            ORDER BY p.id DESC
            "
        );
        $amnt_cls_dsply = 3;
        foreach ($get_pdt_cls as $pdt_idx => $pdt) {
            $get_cls_one = DB::select(
                "SELECT code, name
                FROM product_classificationones pco
                WHERE pco.product_code = '$pdt->product_code'
                "
            );
            $amnt_cls2 = 0;
            foreach ($get_cls_one as $cls1_idx => $cls1) {
                $get_cls_two = DB::select(
                    "SELECT code,
                            name,
                            price,
                            storage,
                            sku
                    FROM product_classificationtwos pct
                    WHERE pct.classificationone_code = '$cls1->code'
                    "
                );
                $get_cls_one[$cls1_idx]->classificationtwos = $get_cls_two;
                $amnt_cls2+=sizeOf($get_cls_two);
            }

            if ($amnt_cls2 > $amnt_cls_dsply) {
                $get_pdt_cls[$pdt_idx]->classification_hidden = $amnt_cls2 - $amnt_cls_dsply;
            }
            $get_pdt_cls[$pdt_idx]->classificationones = $get_cls_one;
        }
        // return $get_pdt_cls;
        // return $get_pdt;
        $amont_pdt = sizeof($get_pdt_cls) + sizeof($get_pdt);
        return view('_manage_product.manage_product', [
            'get_pdt_cls' => $get_pdt_cls,
            'get_pdt' => $get_pdt,
            'amont_pdt' => $amont_pdt,
        ]);
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
        // return 1;
        $is_updt_vis = DB::update(
            "UPDATE products
            SET hidden = $request->hidden
            WHERE code = '$id'
            "
        );
        if ($is_updt_vis) {
            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => true
            ]);
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
