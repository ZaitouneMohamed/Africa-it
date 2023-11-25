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
        "prenium", "active", "sub_categorie_id", "categorie_id", "fiche_technique"
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

    /**
     * Perform a search query based on the given request parameters.
     *
     * @param mixed $query The query to be modified.
     * @param mixed $request The request object containing the search parameters.
     * @return void
     */
    public function scopeSearch($query, $request)
    {
        return $query
            ->when($request->has('subcategorie_id'), function ($query) use ($request) {
                return $query->where("sub_categorie_id", $request->subcategorie_id);
            })
            ->when($request->has('title'), function ($query) use ($request) {
                return $query->where('title', 'LIKE', '%' . $request->title . '%');
            })
            ->when($request->has('min') && $request->min > 0, function ($query) use ($request) {
                return $query->where('price', '>=', $request->min);
            })
            ->when($request->has('max') && $request->max > 0, function ($query) use ($request) {
                return $query->where('price', '<=', $request->max);
            })
            ->when($request->has('categorie_id'), function ($query) use ($request) {
                return $query->whereHas('SubCategorie', function ($subQuery) use ($request) {
                    $subQuery->where('categorie_id', $request->categorie_id);
                });
            });
    }
}
