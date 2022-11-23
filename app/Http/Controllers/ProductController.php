<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductClassificationone;
use App\Models\ProductClassificationtwo;
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
        // return $request;
        $product_temp_code = genCode(52);

        $addProduct = new Product([
            "code" => $product_temp_code,
            "user_code" => Auth::user()->code,
            "name" => $request->product_name,
            "description" => $request->product_description,
            "category" => $request->product_category,
            "brand" => $request->product_brand,
            "origin" => $request->product_origin,
            "weight" => $request->product_weight,
            "price" => $request->product_price,
            "storage" => $request->product_storage,
            "weight_packed" => $request->product_weight_packed,
            "r_packed" => $request->product_r_packed,
            "d_packed" => $request->product_d_packed,
            "c_packed" => $request->product_c_packed,
            "pre_order" => $request->product_pre_order,
            "status" => $request->product_status,
            "sku_code" => $request->product_sku_code,
            "classificationone" => $request->classification1_title,
            "classificationtwo" => $request->classification2_title,
        ]);
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
        if ($request->classification1_title !== null) {
            $array_classification_one = explode(",", $request->classification1_values);
            $array_classification_two = explode(",", $request->classification2_values);
            for ($i = 0; $i < sizeOf($array_classification_one); $i++) {
                $classification_one_name = $array_classification_one[$i];
                $lassification_one_code = genCode(52);
                $add_classification_one = new ProductClassificationone([
                    "product_code" => $product_temp_code,
                    "code" => $lassification_one_code,
                    "name" => $classification_one_name,
                    "path" => "/",
                ]);
                $add_classification_one->save();
                for ($j = 0; $j < sizeOf($array_classification_two); $j++) {
                    $classification_two_name = $array_classification_two[$j];
                    $lassification_two_code = genCode(52);
                    $add_classification_two = new ProductClassificationtwo([
                        "classificationone_code" => $lassification_one_code,
                        "code" => $lassification_two_code,
                        "name" => $classification_two_name,
                        "price" => $request["classification_price_{$i}_{$j}"],
                        "storage" => $request["classification_storage_{$i}_{$j}"],
                        "sku" => $request["classification_sku_{$i}_{$j}"],
                    ]);
                    $add_classification_two->save();
                }
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
        $get_classification_one = DB::select(
            "SELECT code, name, path
            FROM product_classificationones
            WHERE product_code = '$id'
            "
        );
        $array_classification_two = [];
        foreach ($get_classification_one as $cls1) {
            $get_classification_two = DB::select(
                "SELECT name, price, storage, sku
                FROM product_classificationtwos
                WHERE classificationone_code = '{$cls1->code}'
                "
            );
            array_push($array_classification_two, $get_classification_two);
        }
        // return $get_pdt;
        return view('_product.product', [
            'get_pdt' => $get_pdt,
            'get_pdt_img' => $get_pdt_img,
            'get_pdt_vid' => $get_pdt_vid,
            'get_classification_one' => $get_classification_one,
            'array_classification_two' => $array_classification_two,
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
        $get_pdt = DB::select(
            "SELECT *
            FROM products
            WHERE code = '$id'
            "
        )[0];
        $get_pdt_imgs = DB::select(
            "SELECT path
            FROM product_images pi
            WHERE pi.product_code = '$id'
            "
        );
        $get_pdt_video = DB::select(
            "SELECT path
            FROM product_videos
            WHERE product_code = '$id'
            "
        )[0];
        $get_classification_one = DB::select(
            "SELECT code, name
            FROM product_classificationones
            WHERE product_code = '$id'
            "
        );
        foreach ($get_classification_one as $cls1) {
        }
        $get_classification_two = DB::select(
            "SELECT DISTINCT name
            FROM product_classificationtwos
            WHERE classificationone_code = '{$get_classification_one[0]->code}'
            "
        );
        $create_classification_table = DB::select(
            "SELECT code, name
            FROM product_classificationones
            WHERE product_code = '$id'
            "
        );
        for ($index = 0; $index < sizeOf($create_classification_table); $index++) {
            $cls1 = $create_classification_table[$index];
            $get_cls2 = DB::select(
                "SELECT name, price, storage, sku
                FROM product_classificationtwos
                WHERE classificationone_code = '$cls1->code'
                "
            );
            $cls1->classificationtwos = $get_cls2;
        }
        // return $create_classification_table;
        return view('_product.product_edit', [
            'get_pdt' => $get_pdt,
            'get_pdt_imgs' => $get_pdt_imgs,
            'get_pdt_video' => $get_pdt_video,
            'get_classification_one' => $get_classification_one,
            'get_classification_two' => $get_classification_two,
            'create_classification_table' => $create_classification_table,
        ]);
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
        DB::update(
            "UPDATE products
            SET 
                name = '{$request->product_name}',
                description = '{$request->product_description}',
                category = '{$request->product_category}',
                brand = '{$request->product_brand}',
                origin = '{$request->product_origin}',
                weight = '{$request->product_weight}',
                price = '{$request->product_price}',
                storage = '{$request->product_storage}',
                weight_packed = '{$request->product_weight_packed}',
                r_packed = '{$request->product_r_packed}',
                d_packed = '{$request->product_d_packed}',
                c_packed = '{$request->product_c_packed}',
                pre_order = '{$request->product_pre_order}',
                status = '{$request->product_status}',
                sku_code = '{$request->product_sku_code}',
                classificationone = '{$request->classification1_title}',
                classificationtwo = '{$request->classification2_title}'
            WHERE code = '$id'
            "
        );
        return $request;
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
