<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;

class Pelicula extends Model
{
  public $table = "movies";
  public $guarded=[];
}
