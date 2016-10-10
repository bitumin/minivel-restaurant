<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'order',
        'cols',
        'active',
        'hiddenxs'
    ];

    // Relationships
    public function items()
    {
        return $this->hasMany('App\Item','categories_id');
    }

    // Accessors
    // Mutators
}
