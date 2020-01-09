<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;
use App\Genero;


class Pelicula extends Model
{
  public $table = "movies";
  public $guarded=[];

  public function genero(){

    return $this-> belongsTo ("App\Genero", "id");
  }
}
