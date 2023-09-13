<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_number", "user_id",
        "category", "sub_categorie",
        "product", "qty", "adresse", "delivery_date",
        "branch", "payement_methode", "delivery_time", "statue", "product_price", "total"
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function getStatueAttribute($value)
    {
        if ($value == 1) {
            return '<span class="badge bg-label-success me-1">confirmed</span>';
        } elseif ($value == 2) {
            return '<span class="badge bg-label-danger me-1">annuller</span>';
        } else {
            return "hj";
        }
        // return $value = 1 ? "confirmed" : "dfger";
    }
    public function getTotalAttribute($value)
    {
        return Order::where('order_number', $this->order_number)->sum('total');
    }
}
