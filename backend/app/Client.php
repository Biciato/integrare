<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'address', 'email'];

    /**
     * The products that belong to the client.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
