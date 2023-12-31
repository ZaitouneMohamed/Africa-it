<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "icon_class",
    ];

    public function subcategories()
    {
        return $this->hasMany(SubCategorie::class);
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, SubCategorie::class);
    }

    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getCategorieImageAttribute()
    {
        return asset("images/categories/" . $this->Image->url);
    }
}
