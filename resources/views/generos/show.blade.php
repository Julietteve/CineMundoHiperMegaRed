@extends('layouts.navs')

@section('content')



      <p style="padding-top:2%"class="pelicula"> Peliculas de : {{$Genero->name}}</p>
        <div class="separador"></div>

      <div class="poster-c">
        <div class="row">
          @foreach ($Pelicula as $pelicula)
          @if($pelicula->genre_id == $Genero->id)
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
              @endIf
            @endforeach
        </div>
      </div>


@endsection
