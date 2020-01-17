@extends('layouts.navs')

@section('content')



<div class="container-fluid">
  <p class="pelicula">Editar {{$Pelicula->title}} </p>
    <div class="separador"></div>
  <div style="padding-left:7%;padding-right:7%; padding-bottom:5%;padding-top:5%">

  <form action="/pelicula/{{$Pelicula->id}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label  for="title">Titulo</label> <p class="errors">{{ $errors->first('title') }}</p>
    <input style="font-family:'Roboto Slab'" name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$Pelicula->title}}">
  </div>
  <div class="form-group">
    <label for="rating" >Calificación</label> <p class="errors">{{ $errors->first('rating') }}</p>
    <input  style="font-family:'Roboto Slab'"name="rating"  class="form-control" id="formGroupExampleInput2" placeholder="{{$Pelicula->rating}}">
    </div>

      <div class="boton-div">
    <button class="boton btn btn-primary"name="button">Actualizar</button>
    </div>

  </form>

</div>

  </div>


@endsection
