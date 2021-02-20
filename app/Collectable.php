<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collectable extends Model
{
    /**
     * Get the collection that owns the collectable.
     */
    public function collection()
    {
        return $this->belongsTo('App\Collection');
    }
}
