<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banier extends Model
{
    use HasFactory;

    protected $fillable = [
        "categorie_id"
    ];
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function getBanierImageAttribute()
    {
        return asset("images/baniers/" . $this->Image->url);
    }
}
