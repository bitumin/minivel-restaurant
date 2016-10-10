<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'image_filename',
        'order',
        'active'
    ];

    // Relationships
    // Accessors
    // Mutators
}
