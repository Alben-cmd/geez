<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    public function tailor()
    {
        return $this->belongsTo('App\Tailor');
    }
}
