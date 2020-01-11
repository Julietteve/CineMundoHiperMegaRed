@extends('layouts.navs')

@section('content')

<p>Editar {{$Pelicula->title}} </p>


<form action="/pelicula/{{$Pelicula->id}}" method="post">
    @csrf
<div class="form-group">
  <label  for="title">Titulo</label> <p>{{ $errors->first('title') }}</p>
  <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$Pelicula->title}}">
</div>
<div class="form-group">
  <label for="rating" >Calificación</label> <p>{{ $errors->first('rating') }}</p>
  <input name="rating"  class="form-control" id="formGroupExampleInput2" placeholder="{{$Pelicula->rating}}">
</div>

  <button name="button">Actualizar</button>

</form>

@endsection
