<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

require_once('functions/convert.php');
require_once('functions/code_generate.php');
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return genCode(52);
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
        $product_temp_code = genCode(52);

        $addProduct = new Product();
        $addProduct->code = $product_temp_code;
        $addProduct->user_code = Auth::user()->code;
        $addProduct->name = $request->product_name;
        $addProduct->description = $request->product_description;
        $addProduct->category = $request->product_category;
        $addProduct->brand = $request->product_brand;
        $addProduct->origin = $request->product_origin;
        $addProduct->weight = $request->product_weight;
        $addProduct->price = $request->product_price;
        $addProduct->storage = $request->product_storage;
        $addProduct->weight_packed = $request->product_weight_packed;
        $addProduct->r_packed = $request->product_r_packed;
        $addProduct->d_packed = $request->product_d_packed;
        $addProduct->c_packed = $request->product_c_packed;
        $addProduct->pre_order = $request->product_pre_order;
        $addProduct->status = $request->product_status;
        $addProduct->sku_code = $request->product_sku_code;
        $addProduct->save();

        for ($index = 0; $index < 9; $index++) {
            $is_image_exist = $request->file("image-$index");
            if ($is_image_exist) {
                $image_file = $is_image_exist;
                $image_name = date("dmYHis") . '.' . $image_file->getClientOriginalName();
                $image_file->move(public_path("assets/img/product"), $image_name);

                $sto_pdt_img = new ProductImage();
                $sto_pdt_img->code = genCode(52);
                $sto_pdt_img->product_code = $product_temp_code;
                $sto_pdt_img->index = $index;
                $sto_pdt_img->path = "assets/img/product/$image_name";
                $sto_pdt_img->save();
            }
        }
        $is_video_exist = $request->file("product_video");
        if ($is_video_exist) {
            $video_file = $is_video_exist;
            $video_name = date("dmYHis") . '.' . $video_file->getClientOriginalName();
            $video_file->move(public_path("assets/video/product"), $video_name);

            $sto_pro_vid = new ProductVideo();
            $sto_pro_vid->code = genCode(52);
            $sto_pro_vid->product_code = $product_temp_code;
            $sto_pro_vid->path = "assets/video/product/$video_name";
            $sto_pro_vid->save();
        }

        return ($request);
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
        $get_pdt = DB::select(
            "SELECT *
            FROM products p
            WHERE p.code = '$id'
            "
        )[0];
        $get_pdt_img = DB::select(
            "SELECT *
            FROM product_images p_i
            WHERE product_code = '$id'
            "
        );
        $get_pdt_vid = DB::select(
            "SELECT path
            FROM  product_videos p_v
            WHERE product_code = '$id'
            "
        )[0];
        // return $get_pdt;
        return view('_product.product', [
            'get_pdt' => $get_pdt,
            'get_pdt_img' => $get_pdt_img,
            'get_pdt_vid' => $get_pdt_vid,
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
