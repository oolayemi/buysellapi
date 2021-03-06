<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public  function addresses(){
        return $this->hasMany(Address::class);
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }

    protected $hidden = [
        'password',
    ];

}
