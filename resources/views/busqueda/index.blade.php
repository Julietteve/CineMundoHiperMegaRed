@extends('layouts.navs')

@section('content')

<h1>Peliculas</h1>

    @foreach ($pelicula as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}">
    <p>{{$pelicula->title}}</p>
  </a>

    @endforeach

    @foreach ($actor as $actor)
    <a href="/actores/{{$actor->id}}">
    <p>{{$actor->first_name}}</p>
  </a>

    @endforeach



@endsection
