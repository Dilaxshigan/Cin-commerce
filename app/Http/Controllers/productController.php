<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index() {

        return view('product');

    }
    public function product() {

        return view('product_1');

    }
}
