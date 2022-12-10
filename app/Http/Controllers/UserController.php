<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        return view('_profile.profile_edit', [
            'get_user' => $get_user,
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
        // return $request;
        $user_code = $request->user_code;
        $is_image_exist = $request->file("user_avatar");
        if ($is_image_exist) {
            $image_file = $is_image_exist;
            $image_name = date("dmYHis") . '.' . $image_file->getClientOriginalName();
            $image_file->move(public_path("assets/img/profile"), $image_name);
            $avatar_path = "assets/img/profile/$image_name";
            
            DB::update(
                "UPDATE users
                SET avatar = '$avatar_path'
                WHERE code = '$user_code'
                "
            );
        }
        $is_updt_pfle = DB::update(
            "UPDATE users
            SET
                real_name = '$request->real_name',
                gender = '$request->user_gender',
                phone = '$request->phone',
                birthday = '$request->user_birthday',
                email = '$request->email'
            WHERE code = '$user_code'
            "
        );
        return $request;
    }

    // "shop_name"
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
