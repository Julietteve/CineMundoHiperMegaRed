@extends('layouts.navs')

@section('content')


      <div class="contenedor">
        <div style="padding-left:5%;padding-right:5%"class="">
      <div class="container-fluid">
        <p class="pelicula">{{$Actor->first_name}} {{$Actor->last_name}}</p>
        <form class="" action="/actores/{{$Actor->id}}" method="post">
          {{csrf_field()}}
          @method('delete')

          <input type="hidden" name="id" value="{{$Actor->id}}">
          <button style="padding:1%; display:block; margin:auto"class="method"type="submit" name="" value="Eliminar">Eliminar</button>

        </form>
          <div class="separador"></div>



          <div style="padding-top: 3%; padding-bottom: 3%;padding-left: 6%; padding-right:6% " class="">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <img style="width:70%; height:auto; display:block; margin:auto"class=" img-fluid" src="{{$Actor->photo}}" alt="">
              </div>
                <div class="col-lg-8 col-sm-12">
                  <p  style="font-size:1.5em;padding:1%" class="datos-peli">Bio</p>
                  <p style="text-align:justify"class="datos-peli">{{$Actor->bio}}</p>
                  <i style="color:#F0CD13"class="fas fa-star"></i>
                  <p style="display:inline;text-align:center" class="datos-peli">{{$Actor->rating}}</p>
                    </div>
                  </div>

                        </div>

          <h4 style="text-transform: uppercase; padding-left: 6%;padding-bottom:0px"class="cast">Filmografia</h4>
          <div style="padding-bottom: 0px; border:solid 4px;color: #FF4843;"class="separador"></div>
                <div style="padding-top: 3%; padding-bottom: 3%;padding-left: 6%; padding-right:6% "class="">

                <div class="row">
                      @foreach( $Actor->peliculas as $pelicula )
                    <div class="col-lg-3">
                      <a href="/peliculas/{{$pelicula->id}}">
                    <img style="width:auto; height:220px; display:block; margin:auto
                    "class=" img-fluid"src=" {{$pelicula->poster}}" alt="">
                        <p style="font-size: 0.9em;text-align:center; padding:4%"class="datos-peli">  {{$pelicula->title}}</p>
                    </a>
                  </div>
                  @endforeach
                </div>

              </div>

          </div>
          </div>
            </div>
            </div>






@endsection
