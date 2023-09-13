<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banier extends Model
{
    use HasFactory;

    protected $fillable = [
        "text", "subcategorie_id"
    ];
    public function SubCategorie()
    {
        return $this->belongsTo(SubCategorie::class);
    }

    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
