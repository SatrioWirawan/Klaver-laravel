<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class categoryController extends Controller
{
    public function index()
    {
        $post = DB::table('category')->get();
        return view('category', compact('post'));
    }
    
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:category',
            'content' => 'required',
        ]);
        $query = DB::table('category')->insert([
            "title" => $request["title"],
            "content" => $request["content"]
        ]);
        return redirect('/category');
    }

    public function edit($id)
    {
        $post = DB::table('category')->where('id', $id)->first();
        return view('category.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:category',
            'content' => 'required',
        ]);

        $query = DB::table('category')
            ->where('id', $id)
            ->update([
                "title" => $request["title"],
                "content" => $request["content"]
            ]);
        return redirect('/category');
    }

    public function show($id)
    {
        $post = DB::table('category')->where('id', $id)->first();
        return view('category.show', compact('post'));
    }

    public function destroy($id)
    {
        $query = DB::table('category')->where('id', $id)->delete();
        return redirect('/category');
    }
}
