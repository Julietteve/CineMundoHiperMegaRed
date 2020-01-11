@extends('layouts.navs')

@section('content')

<h1>Actores</h1>

    <a href="/agregarActor"> Agregá un Actor</a>
    
    @foreach ($actores as $actor)

    <a href="/actores/{{$actor->id}}">
    <p>{{$actor->first_name}}</p>
    </a>

    @endforeach

    {{$actores->links()}}

@endsection
