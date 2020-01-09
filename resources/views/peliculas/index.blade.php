@extends('layouts.navs')

@section('content')

<h1>Peliculas</h1>

    @foreach ($peliculas as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}">
    <p>{{$pelicula->title}}</p>
  </a>

  <!-- @if ($pelicula->genero)
  <p>{{$pelicula->genero->name}}</p>
  @endif -->

    @endforeach

      {{$peliculas->links()}}

@endsection
