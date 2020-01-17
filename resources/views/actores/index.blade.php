@extends('layouts.navs')

@section('content')

    <h1 style="padding-bottom: 1%"class="tarjeta-h1">Celebridades</h1>
      <p class="method"><a href="/agregarActor"> Agregar una celebridad</a></p>
    <div class="separador"></div>



    <div class="poster-c">
      <div class="row">
          @foreach ($actores as $actor)
          <a href="/actores/{{$actor->id}}">
            <div class="col-lg-3 col-sm-12">
              <div class="tarjeta">
                <img class=" photo img-fluid"src="{{$actor->photo}}" alt="">
                  <p>{{$actor->first_name}} {{$actor->last_name}}</p>
                </div>
              </a>
          </div>
          @endforeach
      </div>
    </div>


    {{$actores->links()}}

@endsection
