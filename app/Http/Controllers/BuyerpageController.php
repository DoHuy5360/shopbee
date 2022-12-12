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
            ["Men's Fashion", 'https://cf.shopee.vn/file/687f3967b7c2fe6a134a2c11894eea4b_tn'],
            ['Phone & Accessory', 'https://cf.shopee.vn/file/31234a27876fb89cd522d7e3db1ba5ca_tn'],
            ['Electronic device', 'https://cf.shopee.vn/file/978b9e4cb61c611aaaf58664fae133c5_tn'],
            ['Computer & Laptop', 'https://cf.shopee.vn/file/c3f3edfaa9f6dafc4825b77d8449999d_tn'],
            ['Camera', 'https://cf.shopee.vn/file/ec14dd4fc238e676e43be2a911414d4d_tn'],
            ['Watch', 'https://cf.shopee.vn/file/86c294aae72ca1db5f541790f7796260_tn'],
            ["Men's shoose", 'https://cf.shopee.vn/file/74ca517e1fa74dc4d974e5d03c3139de_tn'],
            ['Household electrical appliances', 'https://cf.shopee.vn/file/7abfbfee3c4844652b4a8245e473d857_tn'],
            ['Sport & Travel', 'https://cf.shopee.vn/file/6cb7e633f8b63757463b676bd19a50e4_tn'],
            ['Car & Motorcycle & Bicycle', 'https://cf.shopee.vn/file/3fb459e3449905545701b418e8220334_tn'],
            ['Mom & Babie', 'https://cf.shopee.vn/file/099edde1ab31df35bc255912bab54a5e_tn'],
            ['House & Life', 'https://cf.shopee.vn/file/24b194a695ea59d384768b7b471d563f_tn'],
            ['Beauty', 'https://cf.shopee.vn/file/ef1f336ecc6f97b790d5aae9916dcb72_tn'],
            ["Women's Fashion", 'https://cf.shopee.vn/file/75ea42f9eca124e9cb3cde744c060e4d_tn'],
            ['Health', 'https://cf.shopee.vn/file/49119e891a44fa135f5f6f5fd4cfc747_tn'],
            ["Women's shoes", 'https://cf.shopee.vn/file/48630b7c76a7b62bc070c9e227097847_tn'],
            ["Women's wallet", 'https://cf.shopee.vn/file/fa6ada2555e8e51f369718bbc92ccc52_tn'],
            ["Accessory & Women's jewwls", 'https://cf.shopee.vn/file/8e71245b9659ea72c1b4e737be5cf42e_tn'],
            ['Department Store Online', 'https://cf.shopee.vn/file/c432168ee788f903f1ea024487f2c889_tn'],
            ['Book store Online', 'https://cf.shopee.vn/file/36013311815c55d303b0e6c62d6a8139_tn'],
            ["Balo & Men's wallet", 'https://cf.shopee.vn/file/18fd9d878ad946db2f1bf4e33760c86f_tn'],
            ["Toy", 'https://cf.shopee.vn/file/ce8f8abc726cafff671d0e5311caa684_tn'],
            ['Pet', 'https://cf.shopee.vn/file/cdf21b1bf4bfff257efe29054ecea1ec_tn'],
            ["Child's Fashion", 'https://cf.shopee.vn/file/4540f87aa3cbe99db739f9e8dd2cdaf0_tn'],
            ['Wash & House care', 'https://cf.shopee.vn/file/cd8e0d2e6c14c4904058ae20821d0763_tn'],
            ['Voucher & Service', 'https://cf.shopee.vn/file/b0f78c3136d2d78d49af71dd1c3f38c1_tn'],
        ]);
        $products_flash_sale = toObj([
            'product_price',
            'product_image',
            'product_sold_proportion'
        ], [
            ['234.000', 'http://surl.li/dgukv', 23],
            ['234.000', 'http://surl.li/dgukx', 54],
            ['234.000', 'http://surl.li/dguky', 13],
            ['234.000', 'http://surl.li/dgula', 69],
            ['234.000', 'http://surl.li/dguld', 72],
            ['234.000', 'http://surl.li/dgulf', 90],
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
