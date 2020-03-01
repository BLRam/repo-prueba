<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public $table = "actors";
  public $guarded = [];

  public function actores(){
    return $this->belongsToMany(Movie::class, 'actor_movie', 'actor_id', 'movie_id');
}
