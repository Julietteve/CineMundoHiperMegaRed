@extends('layouts.navs')

@section('content')

<h1>Peliculas</h1>

    @foreach ($peliculas as $pelicula)

    <p>{{$pelicula->title}}</p>

    @endforeach

      {{$peliculas->links()}}

@endsection
