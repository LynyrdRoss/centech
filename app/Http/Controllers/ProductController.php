<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Auth;
use App\Cart;
use App\CartItem;

class ProductController extends Controller
{
    public function index()
    {
    	$items = Product::all();

    	return view('menu', compact('items'));
    }

    public function addToCart(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::findByUserId($user_id);
        $product_id = $request->product_id;

    	CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product_id,
        ]);

    	 return redirect('/cart');
    }

    public function indexByID()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::findByUserId($user_id);

        $cart_items = $cart->cart_items;
        $total_price = Product::totalPrice($cart_items);

        return view('cart', compact('cart_items', 'total_price'));
    }

    public function confirmation()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::findByUserId($user_id);

        $cart_items = $cart->cart_items;
        $total_price = Product::totalPrice($cart_items);

        return view('confirmation', compact('cart_items', 'total_price'));
    }

    public function paypal()
    {
        $user = Auth::user();
        $cart = Cart::findByUserId($user->id);

        $user->sendMail($cart);
    }
}
