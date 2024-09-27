<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;
    // protected $fillable = ['user_id', 'category_id', 'appartment_type_id', 'property_title', 'price', 'keyword', 'phone', 'email', 'all_cities_id', 'address', 'area', 'bedroom', 'parking', 'accomudation', 'website', 'details', 'brochure_pdf'];
    protected $fillable = [
        'category_id',
        'appartment_type_id',
        'property_title',
        'price',
        'keyword',
        'phone',
        'email',
        'all_cities_id',
        'address',
        'area',
        'bedroom',
        'bethrooms',
        'parking',
        'accomudation',
        'website',
        'details',
        'user_id', // Add this line
    ];
    // protected $guarded = [];
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'amenity_property');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function appartmentType()
    {
        return $this->belongsTo(AppartmentType::class);
    }

    public function city()
    {
        return $this->belongsTo(AllCity::class, 'all_cities_id');
    }
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'property_amenity', 'property_id', 'amenity_id');
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
