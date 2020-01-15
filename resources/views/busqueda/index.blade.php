@extends('layouts.navs')

@section('content')


<h3 class="tarjeta-h1"> Resultados de "{{request()->get('q')}}"</h3>
<div class="separador"></div>

<div class="poster-c">
  <div class="row">
    @foreach ($pelicula as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}">
      <div class="col-lg-3 col-sm-12">
        <div class="tarjeta">
          <img class=" poster img-fluid"src="{{$pelicula->poster}}" alt="">
            <p >{{$pelicula->title}}</p>
            <i style="color:#F0CD13;text-align:center"class="fas fa-star"></i>
            <p style="display:inline;color:gray; text-align:center">{{$pelicula->rating}}</p>
          </div>
        </a>
    </div>
    @endforeach
  </div>
</div>

    <div class="separador"></div>


  <div class="poster-c">
    <div class="row">
    @foreach ($actor as $actor)
    <a href="/actores/{{$actor->id}}">
      <div class="col-lg-3 col-sm-12">
        <div class="tarjeta">
          <img class=" photo img-fluid"src="{{$actor->photo}}" alt="">
            <p>{{$actor->first_name}} {{$actor->last_name}}</p>
          </div>
        </a>
    </div>
    @endforeach
  </div>
</div>




@endsection
