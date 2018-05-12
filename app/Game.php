<?php

namespace App;



class Game extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function images()
    {
    	return $this->hasMany(GameImage::class);
    }
}
