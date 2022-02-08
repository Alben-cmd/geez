<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{

    public function presentPrice()
    {
        return '₦' . number_format($this->price / 100, 2);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function tailor()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment'); 
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    
}
