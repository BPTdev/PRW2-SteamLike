<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'user_id',
    ];
    public function cartitems(){
        return $this->hasMany(CartItem::class);
    }
}
