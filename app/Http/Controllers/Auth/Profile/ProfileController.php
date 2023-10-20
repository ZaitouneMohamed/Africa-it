<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function index()
    {
        $orders = Auth::user()->Orders;
        return view('profile.index', compact("orders"));
    }
    function profile()
    {
        return view('profile.profile');
    }
    function MyOrders()
    {
        $orders = Auth::user()->Orders;
        return view('profile.orders.index', compact('orders'));
    }
    function WishList()
    {
        $products = Auth::user()->favorites;
        return view('profile.wishlist', compact("products"));
    }
    function OrderDetails($order_number) {
        $order = Order::where('order_number',$order_number)->get();
        return view('profile.orders.details',compact('order'));
    }
}
