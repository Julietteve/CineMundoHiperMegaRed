@extends('layouts.navs')

@section('content')

<div class="container-fluid">
  <p style="padding:2%"class="pelicula">Agregá una celebridad</p>
    <div class="separador"></div>
  <div style="padding-left:7%;padding-right:7%; padding-bottom:5%;padding-top:5%">

<form action="/agregarActor" method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
  <label  for="first_name">Nombre</label> <p class="errors">{{ $errors->first('first_name') }}</p>
  <input name="first_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="form-group">
  <label for="last_name">Apellido</label> <p class="errors">{{ $errors->first('last_name') }}</p>
  <input name="last_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="form-group">
  <label for="last_name">Bio</label> <p class="errors">{{ $errors->first('bio') }}</p>
  <textarea name="bio" type="text" class="form-control" id="formGroupExampleInput2" placeholder=""></textarea>
</div>
<div class="form-group">
  <label for="rating" >Calificación</label> <p class="errors">{{ $errors->first('rating') }}</p>
  <input name="rating"  class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="form-group">
  <div >
    <label for="photo">Foto</label> <p class="errors">{{ $errors->first('photo') }}</p>
    <input class="files"type="file" name="photo" value="">
  </div>
</div>

  <button class="boton btn btn-primary" name="button"> Agregar</button>

</form>
</div>

  </div>

@endsection
