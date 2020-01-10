@extends('layouts.navs')

@section('content')

<h1>Generos</h1>

      <p>{{$Genero->name}}</p>

      <ul>
        @foreach ($Genero->peliculas as $pelicula)
          <li> {{ $pelicula->title}}</li>
        @endforeach
      </ul>


@endsection
