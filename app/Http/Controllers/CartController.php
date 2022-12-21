<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function shopCart()
    {
        $items = \Cart::getContent();
        return view('cart.shop_cart', compact('items'));
    }

    public function addShopCart(Request $request)
    { //via post
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'cover' => $request->cover,
                'description' => $request->description,
                'slug' => $request->slug,
            ]
        ]);
        return Redirect::route('user.shopCart')->with('success', ' - ');

    }
    public function delShopCart(Request $request){
        \Cart::remove($request->id);
        return Redirect::route('user.shopCart')->with('delSuccess', ' - ');

    }
    public function editShopCart(Request $request){
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => 'false',
                'value' => $request->quantity
            ]
        ]);
    }
}
