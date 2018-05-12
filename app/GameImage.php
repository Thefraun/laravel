<?php

namespace App;


class GameImage extends Model
{
    public function games()
    {
    	$this->belongsTo(Game::class);
    }
}
