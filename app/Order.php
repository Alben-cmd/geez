<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function presentAmount()
    {
        return '₦' . number_format($this->amount / 100, 2);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
