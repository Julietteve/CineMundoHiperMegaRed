@extends('layouts.navs')

@section('content')

    <h1 class="tarjeta-h1">Celebridades</h1>
    <div class="separador"></div>

    <a href="/agregarActor"> Agregá un Actor</a>

    @foreach ($actores as $actor)

    <a href="/actores/{{$actor->id}}">
    <p>{{$actor->first_name}}</p>
    </a>

    @endforeach

    {{$actores->links()}}

@endsection
