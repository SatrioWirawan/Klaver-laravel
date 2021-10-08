<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function index()
    {
        $post = DB::table('detail_product')->get();
        return view('productData', compact('post'));
    }
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:detail_product',
            'deskripsi' => 'required',
            // 'foto' => 'required',
            'harga' => 'required',
        ]);
        $query = DB::table('detail_product')->insert([
            "title" => $request["title"],
            "deskripsi" => $request["deskripsi"],
            // "foto" => $request["foto"],
            "harga" => $request["harga"]
        ]);
        return redirect('/admin');
    }

    public function edit($id)
    {
        $post = DB::table('detail_product')->where('id', $id)->first();
        return view('admin.edit', compact('post'));
    }

     
    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:detail_product',
            'deskripsi' => 'required',
            // 'foto' => 'required',
            'harga' => 'required',
        ]);

        $query = DB::table('detail_product')
            ->where('id', $id)
            ->update([
                "title" => $request["title"],
                "deskripsi" => $request["deskripsi"],
                // "foto" => $request["foto"],
                "harga" => $request["harga"]
            ]);
        return redirect('/admin');
    }

    public function show($id)
    {
        $post = DB::table('detail_product')->where('id', $id)->first();
        return view('admin.show', compact('post'));
    }

    public function destroy($id)
    {
        $query = DB::table('detail_product')->where('id', $id)->delete();
        return redirect('/admin');
    }
}
