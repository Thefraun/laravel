<?php

namespace App;



class Game extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
