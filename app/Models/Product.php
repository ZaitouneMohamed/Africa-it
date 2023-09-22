<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title", "slug", "description",
        "price", "old_price",
        "prenium", "active", "sub_categorie_id", "categorie_id"
    ];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }
    public function getFirstImageAttribute()
    {
        return asset("images/products/" . $this->images->first()->url);
    }
    public function scopePrenium($query)
    {
        return $query->where("prenium", 1);
    }
    public function Reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }
    public function SubCategorie()
    {
        return $this->belongsTo(SubCategorie::class);
    }
    public function Images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
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
