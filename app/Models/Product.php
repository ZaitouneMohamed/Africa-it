<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    // Fillables
    protected $fillable = [
        "title", "slug", "description",
        "price", "old_price", "offer",
        "prenium", "active", "sub_categorie_id", "categorie_id"
    ];

    // set slug attribut
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    // get first image from images by polymorphique
    public function getFirstImageAttribute()
    {
        return asset("images/products/" . $this->images->first()->url);
    }

    // get prenium products
    public function scopePrenium($query)
    {
        return $query->where("prenium", 1);
    }
    // get offer products
    public function scopeOffer($query)
    {
        return $query->where("offer", 1);
    }
    public function scopeActive($query)
    {
        return $query->where("active", 1);
    }

    // reviews relation
    public function Reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    // sub categorie relation
    public function SubCategorie()
    {
        return $this->belongsTo(SubCategorie::class);
    }

    // categorie relation
    public function categorie()
    {
        // return $this->
    }

    // polymorphique relation
    public function Images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    // get overall of reviews
    public function getOverallReviewsAttribute()
    {
        if ($this->Reviews->count() > 0) {
            $count = $this->Reviews->count();
            $stars = 0;
            foreach ($this->Reviews as $item) {
                $stars += $item->stars;
            };
            return $stars / $count;
        }
    }
}
