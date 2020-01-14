@extends('layouts.navs')

@section('content')

<h1> Busqueda de "{{request()->get('q')}}"</h1>

    @foreach ($pelicula as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}">
    <p>{{$pelicula->title}}</p>
    <img src="{{$pelicula->poster}}" alt="">
  </a>

    @endforeach

    @foreach ($actor as $actor)
    <a href="/actores/{{$actor->id}}">
    <p>{{$actor->first_name}}{{$actor->last_name}}</p>
    <img src="{{$actor->photo}}" alt="">
  </a>

    @endforeach



@endsection
