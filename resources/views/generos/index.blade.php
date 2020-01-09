@extends('layouts.navs')

@section('content')

<h1>Generos</h1>

    @foreach ($generos as $genero)

    <a href="/generos/{{$genero->id}}">
    <p>{{$genero->name}}</p>
    </a>

    @endforeach

      {{$generos->links()}}

@endsection
