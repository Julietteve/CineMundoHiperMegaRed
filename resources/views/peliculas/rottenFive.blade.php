@extends('layouts.navs')

@section('content')

<h1>Las peores Rankeadas</h1>

@foreach ($peliculas as $pelicula)
<a href="/peliculas/{{$pelicula->id}}">
<p>{{$pelicula->title}}</p>
</a>

@endforeach




@endsection
