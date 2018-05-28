<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index' ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('created_at', 'asc')->get();
        return view('home.index', compact('games'));
    }
}
