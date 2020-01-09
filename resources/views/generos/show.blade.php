@extends('layouts.navs')

@section('content')

<h1>Generos</h1>

      <p>{{$Genero->name}}</p>

      @foreach ($Genero->peliculas as $pelicula)
      <li>{{$pelicula->title}}</li>
      @endforeach
@endsection
