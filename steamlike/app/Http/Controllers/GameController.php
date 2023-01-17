<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\GameFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function buy(Game $game)
    {
        $games = Game::all();
        $user = User::find(Auth::user()->id);
        if ($game->bye($user)) {
            $user->games()->attach($game);

            $message[0] = "You successfully bought " . $game->title;
        } else {
            $message[1] = "You where unable to buy " . $game->title;
        }
        return view('games.index', ['games' => $games, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(GameFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Game $game
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Game $game
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Game         $game
     *
     * @return \Illuminate\Http\Response
     */
    public function update(GameFormRequest $request, Game $game)
    {
        $game->update($request->all());

        return redirect('games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Game $game
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }

}
