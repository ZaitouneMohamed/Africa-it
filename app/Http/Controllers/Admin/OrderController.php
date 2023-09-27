<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function OrdersList()
    {
        $orders = Order::all();
        return view('admin.content.orders.orders', compact('orders'));
    }

    function ViewOrder($order_number)
    {
        $order = Order::where('order_number',$order_number)->get();
        return view('admin.content.orders.view', compact("order"));
    }
    public function ChangeStatue($statue, $order_number)
    {
        $order = Order::where('order_number', $order_number)->get();
        foreach ($order as $item) {
            $item->update([
                "statue" => $statue
            ]);
        }
        return redirect()->back()->with([
            "success" => "statue updated successfly"
        ]);
    }
}
