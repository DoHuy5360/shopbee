<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once('functions\convert.php');

class HomeController extends Controller
{
    public function index()
    {
        $keys = [
            'name',
            'price',
            'image',
            'sold',
        ];
        $arr = [
            ['Tai nghe', '120.000', 'http://surl.li/dafng','3'],
            ['Đồng hồ', '230.000', 'http://surl.li/dafnd','3'],
            ['Máy ảnh', '150.000', 'http://surl.li/dafnj','3'],
            ['Giày vải', '530.000', 'http://surl.li/dafnp','3'],
            ['Kính đen', '230.000', 'http://surl.li/dafnq','3'],
            ['Son môi', '320.000', 'http://surl.li/dafnr','3'],
            ['Tai nghe', '120.000', 'http://surl.li/dguku','3'],
            ['Đồng hồ', '230.000', 'http://surl.li/dgukv','3'],
            ['Máy ảnh', '150.000', 'http://surl.li/dgukx','3'],
            ['Giày vải', '530.000', 'http://surl.li/dguky','3'],
            ['Kính đen', '230.000', 'http://surl.li/dgula','3'],
            ['Son môi', '320.000', 'http://surl.li/dguld','3'],
            ['Son môi', '320.000', 'http://surl.li/dgulf','3'],
        ];
        return view('_home.home', [
            'test_products' => toObj($keys, $arr),
        ]);
    }
}
