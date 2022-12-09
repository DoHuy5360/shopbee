<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

require_once('functions/code_generate.php');
class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_code = Auth::user()->code;
        $get_address = DB::select(
            "SELECT *
            FROM user_addresses
            WHERE user_code = '$user_code'
            ORDER BY default_address = 'true' DESC
            "
        );
        // return $get_address;
        return view('_profile.profile_address', [
            'get_address' => $get_address
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
        // return $request;
        $user__code = Auth::user()->code;
        $address_code = genCode(52);
        [$province, $district, $wards] = explode(",", $request->province_district_wards);
        $add_adres = new UserAddress();
        $add_adres->code = "$address_code";
        $add_adres->user_code = "$user__code";
        $add_adres->receiver = "$request->receier";
        $add_adres->province = "$province";
        $add_adres->district = "$district";
        $add_adres->wards = "$wards";
        $add_adres->detail = "$request->detail";
        $add_adres->phone = "$request->phone";
        $add_adres->type = "$request->address_type";
        if(isset($request->address_default)){
            $add_adres->default_address = "$request->address_default";
        }
        $add_adres->save();

        if (isset($request->address_default)) {
            $request->address_default = 'false';
            DB::update(
                "UPDATE user_addresses
                SET default_address = 'false'
                WHERE user_code = '$user__code'
                AND code <> '$address_code'
                "
            );
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
        $user__code = Auth::user()->code;

        DB::update(
            "UPDATE user_addresses
            SET default_address = 'false'
            WHERE code <> '$id'
            AND user_code = '$user__code'
            "
        );
        DB::update(
            "UPDATE user_addresses
            SET default_address = 'true'
            WHERE code = '$id'
            AND user_code = '$user__code'
            "
        );
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
            "DELETE FROM user_addresses
            WHERE code = '$id'
            "
        );
    }
}
