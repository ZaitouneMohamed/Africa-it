<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        "begin", "end", "active"
    ];
    public function getStatueAttribute($value)
    {
        if ($this->active) {
            return '<span class="badge bg-label-success me-1">active</span>';
        } else {
            return '<span class="badge bg-label-danger me-1">disabled</span>';
        }
    }
    public function getFullTimeAttribute()
    {
        return $this->begin . '-' . $this->end;
    }
}
