@extends('layouts.navs')

@section('content')

<div class="home-cont">
  <div class="row">
    <div class="col-lg-4 col-sm-12">
      <a href="/peliculas">
        <div class="contenedor">
          <img class="imagen-c img-fluid"src="/img/peliculas.jpg" alt="">
            <div style=" background-color:  #F0CD13"class="capa">
              <div class="categoria-p">Peliculas</div>
            </div>
          </div>
        </a>
      </div>

  <div class="col-lg-4 col-sm-12">
    <a href="/actores">
      <div class="contenedor">
        <img class="imagen-c img-fluid"src="/img/actores.jpg" alt="">
          <div style=" background-color: #F6F6D9" class="capa">
            <div style="color:gray"class="categoria-p">Actores</div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-4 col-sm-12">
      <a href="/generos">
        <div class="contenedor">
          <img class="imagen-c img-fluid"src="/img/generos.jpg" alt="">
            <div  style=" background-color: #EC3C37" class="capa">
              <div class="categoria-p">Generos</div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

@endsection
