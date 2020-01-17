@extends('layouts.navs')

@section('content')

  <div class="contenedor">
    <div style="padding-left:5%;padding-right: :5%"class="">
  <div class="container-fluid">
    <p class="pelicula">{{$Pelicula->title}}</p>
      <p class="method"><a href="/pelicula/{{$Pelicula->id}}/editar">Editar</a></p>
    <div class="separador"></div>


      <div style="padding-top: 3%; padding-bottom: 3%;padding-left: 6%; padding-right:6% " class="">


    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <img class=" poster-show img-fluid"src="{{$Pelicula->poster}}" alt="">
          </div>
            <div class="col-lg-8 col-sm-12">
                  <a data-fancybox="gallery" href="{{$Pelicula->trailer}}"><img style="width:40%; margin:auto; display:block"class="img-fluid"src="/img/eye.png"></a>
                  <p style="text-align:justify"class="datos-peli">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                  <div class="row">
                    <div class="datos-peli col-lg-4">
                      <i style="color:#F0CD13"class="fas fa-star"></i>
                      <p style="display:inline;text-align:center" class="datos-peli">{{$Pelicula->rating}}</p>
                    </div>

                    <div class="datos-peli col-lg-4">
                        <p>{{$Pelicula->release_date}}</p>
                    </div>

                    <div class="datos-peli col-lg-4">
                      @if ($Pelicula->genero)
                      <p>{{$Pelicula->genero->name}}</p>
                      @endif
                    </div>

                  </div>
                    </div>
                  </div>
  </div>

      <h4 style="text-transform: uppercase; padding-left: 6%;padding-bottom:0px"class="cast">Elenco</h4>
      <div style="padding-bottom: 0px; border:solid 4px;color: #FF4843;"class="separador"></div>
            <div style="padding-top: 3%; padding-bottom: 3%;padding-left: 6%; padding-right:6% "class="">

            <div class="row">
              @foreach( $Pelicula->actores as $actor )
                <div class="col-lg-3">
                  <a href="/actores/{{$actor->id}}">
                <img style="width:auto; height:220px; display:block; margin:auto"class=" img-fluid"src="{{$actor->photo}}" alt="">

                    <p style="font-size: 0.9em;text-align:center; padding:4%"class="datos-peli"> {{$actor->first_name}} {{$actor->last_name}} </p>

                </a>
              </div>
              @endforeach
            </div>

          </div>

      </div>
      </div>
        </div>









@endsection
