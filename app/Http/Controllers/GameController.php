<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Storage;

class GameController extends Controller
{
    public function index()
    {
    	$games = Game::All();
    	return view('games.index', compact('games'));
    }

    public function show(Game $game)
    {
    	return view('games.show', compact('game'));
    }

    public function create()
    {
    	return view('games.create');
    }
    
    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	$path = $request->file('file')->store('gamecovers', 'public');

    	Game::create([
    		'title' => request('title'),
    		'body' => request('body'),
    		'image' => $path 
    	]);

    	return redirect()->route('games');
    }

    public function destroy(Game $game)
    {
    	$file = 'public/' . $game->image;
    	Storage::delete($file);
    	Game::destroy($game->id);

    	return redirect('/games');
    }
}
