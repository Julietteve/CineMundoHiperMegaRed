@extends('layouts.navs')

@section('content')

<h1 class="tarjeta-h1">Generos</h1>
  <div class="separador"></div>

  <div style="padding:5%"class="">
    <div class="row">
      @foreach ($generos as $genero)
    <div class="col-lg-2 col-sm-6">
      <a href="/generos/{{$genero->id}}">
        <div style="margin:2%"class="contenedor">
          <img class="imagen-c img-fluid"src="{{$genero->vector}}" alt="">
            <div  style=" background-color: #EC3C37" class="capa">
              <div style="font-size:1.5em"class="categoria-p">{{$genero->name}}</div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>


@endsection
