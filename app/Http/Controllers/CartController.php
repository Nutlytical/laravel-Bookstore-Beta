<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Cart;

class CartController extends Controller
{
    public function showCart() {
        $cart = Session::get('cart');
        if ($cart) {
            return view('cart.showCart', ['cartItems'=>$cart]);
        }
        return redirect()->route('products');
    }

    public function incrementCart(Request $request, $id) {
        $product = Book::find($id);
        $cart = $request->session()->get('cart');
        // dump($cart);
        $cart = new Cart($cart);
        $cart->addItem($id, $product);
        $cart->updatePriceQuantity();
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function deleteProductFromCart(Request $request, $id) {
        $cart = $request->session()->get('cart');

        if (array_key_exists($id, $cart->items)) {
            unset($cart->items[$id]);
        }
        // Inventory
        $updateCart = new Cart($cart);
        $updateCart->updatePriceQuantity();
        $request->session()->put('cart', $updateCart);
        return redirect()->back();
    }
}
