<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GameImage;
use Storage;
use Image;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin'])->except(['index', 'show']);
    }

    public function index()
    {
    	$games = Game::latest()->paginate(5);
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

    	$game = Game::create([
    		'title' => request('title'),
    		'body' => request('body') 
    	]);

        if ($request->hasFile('file'))
        {
            foreach ($request->file('file') as $file)
            {
                $name = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $fileName = md5(microtime()) . $ext;
                $path = "games/" . $game->id . "/" . $fileName;
                $origPath = "games/" . $game->id . "orig/" . $fileName;
                $img = Image::make($file)->fit(700, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode('jpg', 75);
                Storage::disk('public')->put($origPath, fopen($file, 'r+'));
                Storage::disk('public')->put($path, $img->stream());

                GameImage::create([
                    'name' => $name,
                    'path' => $path,
                    'origPath' => $origPath,
                    'game_id' => $game->id
                ]);
            }
            return response()->json(['']);
        }

    	return redirect()->route('games');
    }

    public function destroy(Game $game)
    {
    	foreach ($game->images as $file)
        {
            $path ='public/' . $file->path;
            $origPath = 'public/' . $file->origPath;
            Storage::delete($path);
            Storage::delete($origPath);

            GameImage::destroy($file->id);
        }

        Game::destroy($game->id);

        return back();
    }
}
