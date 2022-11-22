<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('product',[
            'product' => $product
        ]);
    }

    public function edit()
    {
        return view('product_edit');
    }
}
