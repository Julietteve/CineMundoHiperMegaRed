@extends('layouts.navs')

@section('content')



    <p>{{$Pelicula->title}}</p>
      <img class="img-fluid"src="{{$Pelicula->poster}}" alt="">
    <a href="/pelicula/{{$Pelicula->id}}/editar">Editar</a>


    <ul>
      <h4>Cast</h4>
      @foreach( $Pelicula->actores as $actor )
        <a href="/actores/{{$actor->id}}"><li> {{$actor->first_name}} {{$actor->last_name}} </li></a>
      @endforeach
    </ul>

    @if ($Pelicula->genero)
    <p>{{$Pelicula->genero->name}}</p>
    @endif





@endsection
