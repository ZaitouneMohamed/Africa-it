<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartlist()
    {
        $cart = session()->get('cart', []);
        return view('landing.Cart', compact("cart"));
    }
    public function addToCart(Request $request)
    {
        $id = (int)$request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "image" => $product->FirstImage,
                "title" => $product->title,
                "quantity" => $request->qty ?? 1,
                "price" => $product->price
            ];
        }
        session()->put('cart', $cart);
    }
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart.');
        }
    }

    public function getCartCount()
    {
        $total = 0;
        $count = 0;
        if (session("cart")) {
            foreach (session('cart') as $id => $item) {
                $total += $item['price'] * $item['quantity'];
                $count++;
            };
        }
        if ($total > 100) {
            $subtotal = $total + 30;
        }else {
            $subtotal = $total;
        }
        return response()->json([
            "total" => $total,
            "subtotal" => $subtotal,
            "count" => $count
        ]);
    }

    public function CheckOut()
    {
        $branches = Branch::all();
        return view('electro.checkout', compact("branches"));
    }

    public function getCartContent()
    {
        if (session('cart')) {
            $cartItems = array_values(session('cart'));
            return response()->json($cartItems);
        } else {
            return response()->json([]);
        }
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            if (!session("cart")) {
                return response()->json("empty");
            }
        }
    }
}
