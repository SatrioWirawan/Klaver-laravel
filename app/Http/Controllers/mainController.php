<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view ('contact');
    }

    public function product(){
        return view ('product');
    }

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
