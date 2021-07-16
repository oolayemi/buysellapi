<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'quantity' => 'integer',
        //        'rating' => 'float',
        //        'price' => 'float',
        //        'discount' => 'float',
        ////        'created_at' => 'datetime',
        ////        'updated_at' => 'datetime',
        //
        //    ];
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function carts() {
        return $this->belongsToMany(Cart::class);
    }
}
