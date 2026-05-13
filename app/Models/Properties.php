<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'address', 'slug', 'list_price', 'est_payment', 'arv', 'roi', 'ltc',
        'beds', 'bath', 'sqft', 'yr_built', 'exterior', 'main_img', 'gallery',
        'lat', 'lng', 'nearby_amenities', 'status', 'prop_type', 'is_featured', 'is_available'
    ];
}
