<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }


    public function tailor()
    {
        return $this->belongsTo('App\Tailor');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment'); 
    }
    
}
