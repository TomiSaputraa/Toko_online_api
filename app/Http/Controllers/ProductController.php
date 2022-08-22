<?php

namespace App\Http\Controllers;

use index;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // function untuk tampilkan data
    public function index() {
        $products = Product::all();
        return view('products.index',compact(['products']));
    }

    // function untuk mengarah ke view create.blade.php
    public function create(){
        return view('products.create');
    }

    // function untuk membuat data baru
    public function store(Request $request){
        // dd($request->all());
        Product::create($request->all()); //fungsi ini berguna untuk membuat data baru di database
        return redirect('/products');
    }

    // funtion untuk edit data dengan id
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact(['product']));
    }

    // function untuk update data
    public function update(Request $request,$id) {
        // dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function destroy ($id) {
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');
    }
}
