@extends('layouts.navs')

@section('content')

<h1>Generos</h1>

    @foreach ($generos as $genero)

    <p>{{$genero->name}}</p>

    @endforeach

@endsection
