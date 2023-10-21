<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = [
        "full_name",
        "phone",
        "adresse",
        "email",
        "cin",
    ];

    public function Orders() {
        return $this->hasMany(Order::class);
    }
}
