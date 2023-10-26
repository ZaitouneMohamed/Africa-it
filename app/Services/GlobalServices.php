<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class GlobalServices
{
    public function CheckCoupon($coupon)
    {
        $coupon_list = DB::table('coupons')->where('code', $coupon)->first();
        if ($coupon_list) {
            $total = $this->getCartCount();
            if ($total > $coupon_list->min_purchase) {
                if ($coupon_list->end_date < now()) {
                    // session()->put('coupon', $coupon_list);
                    return "you did it , you have : " . $coupon_list->discount;
                }else {
                    return "this coupon end at : " . $coupon_list->end_date;
                }
            } else {
                return "sorry but you didn't rechout to : " . $coupon_list->min_purchase;
            }
        } else {
            return "sorry coupon not found";
        }
    }

    public function getCartCount()
    {
        $total = 0;
        if (session("cart")) {
            foreach (session('cart') as $id => $item) {
                $total += $item['price'] * $item['quantity'];
            };
        }
        return $total;
    }
}
