<?php

namespace App\Http\Controllers;

use App\Models\Game;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public final function index ()
    {

        $promotions = Game::all()->where('published_on','<=',date('Y-m-d'))->sortByDesc('published_on')->take(5);
        return view('home',['promotions' => $promotions]);
    }
}
