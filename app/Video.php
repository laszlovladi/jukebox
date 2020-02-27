<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Genre;

class Video extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);             // it is much more precise
        // return $this->belongsTo(App\Author::class);      // all these work
        // return $this->belongsTo('App\Author');           // all these work 
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

}
