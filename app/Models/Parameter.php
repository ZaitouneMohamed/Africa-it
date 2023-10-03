<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        "adresse",
        "phone",
        "small_about",
        "about",
        "facebook",
        "instagram",
        "linkedin",
    ];
    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getCategorieImageAttribute()
    {
        return asset("images/parameter/" . $this->Image->url);
    }
}
