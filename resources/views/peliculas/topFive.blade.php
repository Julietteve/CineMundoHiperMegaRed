@extends('layouts.navs')

@section('content')


<!-- @foreach ($peliculas as $pelicula)
<a href="/peliculas/{{$pelicula->id}}">
<p> {{$loop->iteration}} - {{$pelicula->title}}</p>
</a>


@endforeach -->

<h1 class="tarjeta-h1">Las cuatro <br> más queridas</h1>
  <div class="separador"></div>
    <div class="poster-c">
      <div class="row">
      @foreach ($peliculas as $pelicula)
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


@endsection
