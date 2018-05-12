<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function store(Game $game)
    {
    	$this->validate(request(), ['body' => 'required']);

    	Comment::create([
    		'body' => request('body'),
    		'user_id' => auth()->id(), 
    		'game_id' => $game->id
    	]);

    	return back();
    }
}
