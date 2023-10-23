<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
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
        $branch_id = Order::where('order_number', $order_number)->first()->branche_id;
        $branch = Branch::find($branch_id);
        return view('admin.content.orders.view', compact("order","branch"));
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
    function ConfirmedOrders()
    {
        $orders = Order::confirmed()->get();
        return view('admin.content.orders.orders', compact('orders'));
    }
    function AnnuledOrders()
    {
        $orders = Order::Annuller()->get();
        return view('admin.content.orders.orders', compact('orders'));
    }
    function returnedOrders()
    {
        $orders = Order::Returned()->get();
        return view('admin.content.orders.orders', compact('orders'));
    }
    function OnDeliveryOrders()
    {
        $orders = Order::OnDelivery()->get();
        return view('admin.content.orders.orders', compact('orders'));
    }
    function DelivredOrders()
    {
        $orders = Order::Delivred()->get();
        return view('admin.content.orders.orders', compact('orders'));
    }
}
