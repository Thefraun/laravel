<?php

namespace App;



class Comment extends Model
{
    public function posts()
    {
    	return $this->belongsTo(Game::class);
    }
}
