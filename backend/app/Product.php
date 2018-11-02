<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * The clients that belong to the product.
     */
    public function clients()
    {
        return $this->belongsToMany('App\Product')->using('App\ClientProduct');
    }
}
