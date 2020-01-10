@extends('layouts.navs')

@section('content')

<h1>Peliculas</h1>

    @foreach ($pelicula as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}">
    <p>{{$pelicula->title}}</p>
  </a>

    @endforeach

    

@endsection
