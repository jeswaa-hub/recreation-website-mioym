<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimonials extends Model
{
    protected $fillable = ['name', 'subject', 'description', 'rating'];
}
