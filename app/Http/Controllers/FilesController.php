<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
{
    public function index()
    {
        return File::all();
    }

    public function show(File $file)
    {
        return $file;
    }

    public function store(Request $request)
    {
        $originalFileName =  $request->file('file')->getClientOriginalName();
        return $originalFileName;
    }
//
//    public function update(Request $request, Product $product)
//    {
//        $product->update($request->all());
//
//        return response()->json($product, 200);
//    }
//
//    public function delete(Product $product)
//    {
//        $product->delete();
//
//        return response()->json(null, 204);
//    }
}
