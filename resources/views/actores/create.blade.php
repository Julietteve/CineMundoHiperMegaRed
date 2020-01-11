@extends('layouts.navs')

@section('content')

<h1>Agregá un Actor</h1>

<form action="/agregarActor" method="post">
    @csrf
<div class="form-group">
  <label  for="first_name">Nombre</label> <p>{{ $errors->first('first_name') }}</p>
  <input name="first_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="form-group">
  <label for="last_name">Apellido</label> <p>{{ $errors->first('last_name') }}</p>
  <input name="last_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="form-group">
  <label for="rating" >Calificación</label> <p>{{ $errors->first('rating') }}</p>
  <input name="rating"  class="form-control" id="formGroupExampleInput2" placeholder="">
</div>

  <button name="button"> Agregar</button>

</form>

@endsection
