<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
  public $table = "movies";
  public $guarded = [];


 public function actors() {
   return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
 }

 public function genre() {
   return $this->belongsTo(Genre::class, 'genre_id');
 }

}
