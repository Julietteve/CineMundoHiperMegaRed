@extends('layouts.navs')

@section('content')

<h1>Actores</h1>



      <p>{{$Actor->first_name}}</p>

      <ul>
        @foreach( $Actor->peliculas as $pelicula )
          <a href="/peliculas/{{$pelicula->id}}"><li> {{$pelicula->title}}</li></a>
        @endforeach
      </ul>





@endsection
