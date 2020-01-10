@extends('layouts.navs')

@section('content')

<h1>Peliculas</h1>



    <p>{{$Pelicula->title}}</p>

    <ul>
      @foreach( $Pelicula->actores as $actor )
        <a href="/actores/{{$actor->id}}"><li> {{$actor->first_name}}</li></a>
      @endforeach
    </ul>

    @if ($Pelicula->genero)
    <p>{{$Pelicula->genero->name}}</p>
    @endif





@endsection
