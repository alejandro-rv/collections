<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /**
     * Get the collectables for the collection.
     */
    public function collectables()
    {
        return $this->hasMany('App\Collectable');
    }
}
