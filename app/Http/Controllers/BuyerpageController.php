<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

require_once('functions\convert.php');
class BuyerpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return $suggest_products;
        $suggest_products = toObj([
            'name',
            'price',
            'image',
            'sold',
        ], [
            ['Tai nghe', '120.000', 'http://surl.li/dafng', '3'],
            ['Đồng hồ', '230.000', 'http://surl.li/dafnd', '3'],
            ['Máy ảnh', '150.000', 'http://surl.li/dafnj', '3'],
            ['Giày vải', '530.000', 'http://surl.li/dafnp', '3'],
            ['Kính đen', '230.000', 'http://surl.li/dafnq', '3'],
            ['Son môi', '320.000', 'http://surl.li/dafnr', '3'],
            ['Tai nghe', '120.000', 'http://surl.li/dguku', '3'],
            ['Đồng hồ', '230.000', 'http://surl.li/dgukv', '3'],
            ['Máy ảnh', '150.000', 'http://surl.li/dgukx', '3'],
            ['Giày vải', '530.000', 'http://surl.li/dguky', '3'],
            ['Kính đen', '230.000', 'http://surl.li/dgula', '3'],
            ['Son môi', '320.000', 'http://surl.li/dguld', '3'],
            ['Son môi', '320.000', 'http://surl.li/dgulf', '3'],
        ]);
        $product_categories = toObj([
            'category_name',
            'category_image'
        ], [
            ["Men's Fashion", asset('assets/img/home/categories/0.webp')],
            ['Phone & Accessory', asset('assets/img/home/categories/1.webp')],
            ['Electronic device', asset('assets/img/home/categories/2.webp')],
            ['Computer & Laptop', asset('assets/img/home/categories/3.webp')],
            ['Camera', asset('assets/img/home/categories/4.webp')],
            ['Watch', asset('assets/img/home/categories/5.webp')],
            ["Men's shoose", asset('assets/img/home/categories/6.webp')],
            ['Household electrical appliances', asset('assets/img/home/categories/7.webp')],
            ['Sport & Travel', asset('assets/img/home/categories/8.webp')],
            ['Car & Motorcycle & Bicycle', asset('assets/img/home/categories/9.webp')],
            ['Mom & Babie', asset('assets/img/home/categories/10.webp')],
            ['House & Life', asset('assets/img/home/categories/11.webp')],
            ['Beauty', asset('assets/img/home/categories/12.webp')],
            ["Women's Fashion", asset('assets/img/home/categories/13.webp')],
            ['Health', asset('assets/img/home/categories/14.webp')],
            ["Women's shoes", asset('assets/img/home/categories/15.webp')],
            ["Women's wallet", asset('assets/img/home/categories/16.webp')],
            ["Accessory & Women's jewwls", asset('assets/img/home/categories/17.webp')],
            ['Department Store Online', asset('assets/img/home/categories/18.webp')],
            ['Book store Online', asset('assets/img/home/categories/19.webp')],
            ["Balo & Men's wallet", asset('assets/img/home/categories/20.webp')],
            ["Toy", asset('assets/img/home/categories/21.webp')],
            ['Pet', asset('assets/img/home/categories/22.webp')],
            ["Child's Fashion", asset('assets/img/home/categories/23.webp')],
            ['Wash & House care', asset('assets/img/home/categories/24.webp')],
            ['Voucher & Service', asset('assets/img/home/categories/25.webp')],
        ]);
        $products_flash_sale = toObj([
            'product_price',
            'product_image',
            'product_sold_proportion'
        ], [
            ['234.000', asset('assets/img/home/slider/camera2.webp'), 23],
            ['234.000', asset('assets/img/home/slider/glass.webp'), 54],
            ['234.000', asset('assets/img/home/slider/remote_game.webp'), 13],
            ['234.000', asset('assets/img/home/slider/bag.webp'), 69],
            ['234.000', asset('assets/img/home/slider/shoes.webp'), 72],
            ['234.000', asset('assets/img/home/slider/airpod.webp'), 90],
        ]);
        $malls = toObj([
            'mall_image',
            'mall_sale'
        ], [
            ['https://cf.shopee.vn/file/075c9984c3ce3639aed9ff0971c2e3ea_xhdpi', '40%'],
            ['https://cf.shopee.vn/file/84c0ff7cbe2f23ce8a4450d4c227caea_xhdpi', '20%'],
            ['https://cf.shopee.vn/file/4326648b37d302c66df706f05b6b1628_xhdpi', '50%'],
            ['https://cf.shopee.vn/file/d272a771fbf4da531c8aae0e55c054bf_xhdpi', '90%'],
            ['https://cf.shopee.vn/file/b766131e2f0ea33b2bf580f43c1272ee_xhdpi', '40%'],
            ['https://cf.shopee.vn/file/758ede02362e15c261a3c2eb4e130252_xhdpi', '80%'],
            ['https://cf.shopee.vn/file/d5f557dfbc5da10ce85c722bf4d40159_xhdpi', '70%'],
        ]);
        $get_pdt = DB::select(
            "SELECT pi.path, p.name, p.price, p.code, p.sold
            FROM products p, product_images pi
            WHERE p.code = pi.product_code
            AND pi.index = '0'
            AND p.hidden = 'false'
            "
        );
        return view('_home.home', [
            'get_pdt' => $get_pdt,
            'product_categories' => $product_categories,
            'products_flash_sale' => $products_flash_sale,
            'malls' => $malls,
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
