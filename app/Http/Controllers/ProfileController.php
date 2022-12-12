<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_guest = Auth::guest();
        if (!$check_guest) {
            $user_code = Auth::user()->code;
            $get_user = DB::select(
                "SELECT *
                 FROM users
                 WHERE code = '$user_code'
                "
            )[0];
            return view('_profile.profile', [
                'get_user' => $get_user,
                'content' => '_profile.profile_edit'
            ]);
        } else {
            return redirect()->route('login', [
                'pre_page' => '/profile'
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
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Request $request)
    {
        // return $request;
        $user_code = Auth::user()->code;
        $get_user = DB::select(
            "SELECT *
                 FROM users
                 WHERE code = '$user_code'
                "
        )[0];
        switch ($slug) {
            case "order":
                $get_bill_pdt = DB::select(
                    "SELECT u.name AS owner_name, 
                                bp.name AS product_name, 
                                bp.total AS product_total, 
                                amount,
                                path, 
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
            $content = "_purchase.purchase_process_full";
            return view('_profile.profile', [
                'get_user' => $get_user,
                'get_bill_pdt' => $get_bill_pdt,
                'amount_order' => $amount_order,
                'content' => $content,
                ]);
            case "info":
                return view('_profile.profile', [
                    'get_user' => $get_user,
                    'content' => '_profile.profile_edit'
                ]);
            case "address":
                $get_address = DB::select(
                    "SELECT *
                        FROM user_addresses
                        WHERE user_code = '$user_code'
                        ORDER BY default_address DESC
                        "
                );
                return view('_profile.profile', [
                    'get_user' => $get_user,
                    'get_address' => $get_address,
                    'content' => '_profile.profile_address'
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
