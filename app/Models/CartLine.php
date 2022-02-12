<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(Cart::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
