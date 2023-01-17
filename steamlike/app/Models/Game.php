<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Game extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'promotion',
        'published_on',
    ];
    public function bye($user): bool
    {
        if ($user->balance>=$this->price)
        {
            $user->balance -= $this->price;
            $user->save();
            return true;
        }else{
            return false;
        }
    }
    public function users()
    {
        return $this->belongsToMany(User::class)->using(Library::class);
    }
}
