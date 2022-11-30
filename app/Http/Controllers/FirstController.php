<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('first', [
            'products' => $products //aqui está o payload
        ]);
    }

    public function teste()
    {
        return view('test');
    }
}
