<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyImage extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'property_id', // Add this line
        'images',
    ];
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
