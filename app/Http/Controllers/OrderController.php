<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\PlaceOrderRequest;
use App\Models\Branch;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PlaceOrderRequest $request)
    {
        $ordernumber = $this->GenerateOrderNumber();
        $branch = Branch::find($request->branch);
        foreach (session("cart") as $item) {
            $order = Order::create([
                "order_number" => $ordernumber,
                "user_id" => Auth::user()->id,
                "product_id" => $item["id"],
                "qty" => $item["quantity"],
                "adresse_id" => $request->adresse_id,
                "delivery_date" => $request->delivery_date,
                "branch" => $branch->name,
                "charge_delivery" => $branch->charge_delivery,
                "payement_methode" => $request->payement_methode,
                "delivery_time" => $request->delivery_time,
                "total" => $item["quantity"] * $item["price"],
                "statue" => 1
            ]);
        }
        session()->forget('cart');
        return redirect()->route('user.profile.index');
    }
    function GenerateOrderNumber()
    {
        $order_number = DB::table('orders')->latest()->first();
        if ($order_number) {
            $order_number = $order_number->order_number + 1;
        } else {
            $order_number = 10000;
        }
        return $order_number;
    }
}
