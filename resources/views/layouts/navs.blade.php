<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>CineMundoHiperMegaRed</title>

      <link rel="shortcut icon" type="image/png" href="/img/eye.png">

      <!-- bootstrap CSS-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- FancyBox -->
      <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">

      <!-- Internal CSS -->
      <link rel="stylesheet" href="/css/stylesheet.css">

      <!-- fontawesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

      <!-- Google Fonts CSS -->
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Roboto+Slab&display=swap" rel="stylesheet">


</head>
<body>
  <div class="cine-top">
    <a href="/"><h1 class="cine">CineMundoHiperMegaRed</h1></a>
  </div>
  <div class="cine-bottom"></div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Explorar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/peliculas">Peliculas</a>
          <a class="dropdown-item" href="/actores">Celebridades</a>
          <a class="dropdown-item" href="/generos">Géneros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ranking
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/topFive">Las cuatro mas queridas</a>
          <a class="dropdown-item" href="/rottenFive">Las cuatro mas odiadas</a>
      </li>
    </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" action="/buscar" method="get" >
    <div class="container-1">
      <input class="form-control mr-sm-2 mr-lg-6 search" name="q" placeholder="buscar peliculas y celebridades . . ." value="{{ request('q') }}" type="search" id="search"  />
      </div>
    </form>
  </ul>

<ul class="navbar-nav mr-auto">
  <li style="font-size:1em; font-weight:normal; color:white"  class="nav-item dropdown">


                  @guest
                      <li class="nav-item">
                          <a style="color: #FF4843 !important; font-weight:bold" class="nav-link" href="{{ route('login') }}">{{ __('Ingresá') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a style="color: #FF4843 !important;font-weight:bold" class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a style="color: #FF4843 !important; font-weight:bold" style="color:black"id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{Auth::user()->name}} <span class="caret"></span>
                          </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="">
                                  <a style="color:#f24534" class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Cerrar Sesión') }}
                                  </a>


                                </div>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest


  </li>
  </ul>


</div>
</div>
  </nav>





@yield('content')

<footer class="conti">
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-3" >
      <div class="">
        <p class="cine-f">Cine <br> Mundo <br> Hiper <br> Mega <br> Red</p>
      </div>
    </div>
    <div class= "col-3 ">
      <div class="categorias">
          <ul>
            <li >Categorias</li>
            <li class="cat-a"><a href="/peliculas">Peliculas</a></li>
            <li class="cat-a"><a href="/actores">Celebridades</a></li>
            <li class="cat-a"><a href="/generos">Generos</a></li>
          </ul>
        </div>
      </div>
      <div class="col-3 d-none d-lg-block  ">
        <div class="categorias">
          <div class="sm-icons cat-a"><div>
            <a href="http://https://www.twitter.com/"><i  class=" icons fab fa-twitter"></i></a>
                <a href="http://https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="http://https://www.instagram.com/"><i class=" icons fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="col-2">
            </div>
          </div>
        </div>
      </div>
      </footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/jquery.fancybox.js"></script>

<script src="/js/jquery.min.js"></script>



</body>
</html>
