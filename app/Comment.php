<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function cloth()
    {
        return $this->belongsTo('App\Cloth');
    }
}
