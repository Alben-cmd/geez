<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Bavix\Wallet\Traits\HasWallet; 
use Bavix\Wallet\Interfaces\Wallet; 

class User extends Authenticatable implements Wallet
{
    use Notifiable;
    use HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname','brand_name', 'picture', 'phone_1','phone_2', 'email', 'location', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wishlists()
    {
        return $this->hasMany('App\Wishlist');
    }

    public function subscribes()
    {
        return $this->hasMany('App\Subscribe'); 
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
