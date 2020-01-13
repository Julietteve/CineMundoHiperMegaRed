@extends('layouts.navs')

@section('content')

<h1 class="tarjeta-h1">Generos</h1>
  <div class="separador"></div>

    @foreach ($generos as $genero)

    <a href="/generos/{{$genero->id}}">
    <p>{{$genero->name}}</p>
    </a>

    @endforeach

      {{$generos->links()}}

@endsection
