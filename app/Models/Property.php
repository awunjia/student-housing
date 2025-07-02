<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'description',
        'main_image',
        'address',
        'gallery_images',
        'price',
        'old_price',
        'available_from',
        'is_furnished',
        'area_sqft',
        'bedrooms',
        'bathrooms',
        'zipcode',
        'city',
        'has_sauna',
        'has_laundry',
        'landlord_id',
    ];

    // Cast fields to proper data types
    protected $casts = [
        'price' => 'float',
        'old_price' => 'float',
        'available_from' => 'date',
        'is_furnished' => 'boolean',
        'area_sqft' => 'decimal:2',
        'bedrooms' => 'integer',
        'bathrooms' => 'integer',
        'gallery_images' => 'array',  // json to array
        'has_sauna' => 'boolean',
        'has_laundry' => 'boolean',
    ];

    // Relationship to the User model as landlord
    public function landlord()
    {
        return $this->belongsTo(User::class, 'landlord_id');
    }
}
