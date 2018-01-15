<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function series()
    {
        return $this->hasMany(Serie::class);
    }
}
