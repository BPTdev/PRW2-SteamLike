<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $casts = [
  //      'date' => 'date:d.m.Y',
    ];

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'date',
    ];
}
