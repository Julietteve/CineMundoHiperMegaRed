@extends('layouts.navs')

@section('content')

<h1>Actores</h1>

    @foreach ($actores as $actor)

    <p>{{$actor->first_name}}</p>

    @endforeach

@endsection
