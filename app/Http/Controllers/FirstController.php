<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function productsList()
    {
        $products = Product::all();

        return view('first', [
            'products' => $products //aqui está o payload
        ]);
    }
}
