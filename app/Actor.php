<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;

class Actor extends Model
{
  public $table = "actors";
  public $guarded=[];

  public function peliculas(){

    return $this-> belongsToMany ("App\Pelicula", "actor_movie", "actor_id", "movie_id");
  }
}
