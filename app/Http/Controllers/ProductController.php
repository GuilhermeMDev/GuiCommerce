<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function productsList()
    {
        $products = Product::all();

        return view('products_list', [
            'products' => $products //aqui está o payload
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }

    public function productsSearch(Product $product, Request $request)
    {
        $productFiltered = $product->where('name', 'LIKE', "%{$request->search}%")->get();
//        dd($productFiltered);

        return view('products.search-products.index', [
            'products' => $productFiltered
        ]);


    }
}
