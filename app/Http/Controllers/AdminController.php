<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        return view('admin/home');
    }

    public function indexProduct()
    {
        $products = Product::all();
        return view('admin/products/list', compact('products'));
    }

    public function createProduct()
    {
        return view('admin/products/add');
    }

    public function storeProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('images');
            $product->image = $path;
        }
        $product->category_id = $request->category;
        dd ($product);
        return redirect()->route('products.index');
    }
}
