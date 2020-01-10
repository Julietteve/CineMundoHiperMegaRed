<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;
use App\Genero;


class Pelicula extends Model
{
  public $table = "movies";
  public $guarded=[];

  public function genero(){

    return $this-> belongsTo("App\Genero", "id");
  }

  public function actores(){

    return $this-> belongsToMany("App\Actor", "actor_movie",  "movie_id", "actor_id",);
  }
}
