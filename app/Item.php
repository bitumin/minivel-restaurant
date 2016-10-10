<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'image_filename',
        'name',
        'description',
        'order',
        'price',
        'active',
        'hiddenxs',
        'categories_id'
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Accessors
    // Mutators
}
