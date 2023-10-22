<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Order;
use App\Models\User;
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
    function EditProfile()
    {
        return view('profile.edit-profile');
    }
    function UpdateProfile(ProfileRequest $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with([
            "success" => "profile update with success"
        ]);
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
    function OrderDetails($order_number)
    {
        $order = Order::where('order_number', $order_number)->get();
        return view('profile.orders.details', compact('order'));
    }
}
