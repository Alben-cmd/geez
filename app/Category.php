<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function cloths()
    {
        return $this->belongsToMany('App\Cloth');
    }
}
