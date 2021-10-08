<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productController extends Controller
{
    public function show($title)
    {
        $post = DB::table('detail_product')->where('title', $title)->first();
        return view('product.productview', compact('post'));
    }

}
