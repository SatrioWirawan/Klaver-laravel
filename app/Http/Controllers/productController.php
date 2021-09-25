<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function baloon(){
        return view('product.baloon');
    }

    public function abstract(){
        return view('product.abstract');
    }

    public function loose(){
        return view('product.loose');
    }

    public function pocket(){
        return view('product.pocket');
    }
}
