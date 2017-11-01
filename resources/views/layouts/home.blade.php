<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
         @yield('title')
    </title>
    <link rel="icon" type="img/png" href="{{ asset ('img/log2.png')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://bootstrap-themes.github.io/application/assets/css/toolkit.css" rel="stylesheet">
    
    <link href="https://bootstrap-themes.github.io/application/assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="bjy">
  @yield('body')
  <nav class="ck mo zq mt qh app-navbar">

  <button class="cg bll blm bkf" >
            <img class="rl" src="{{asset ('img/log4.png')}}" alt="Babbler">
          </button>

  <button
          class="mk blk se"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="NBFIDSBGDISB">
      <span role="button" tabindex="0" 
       aria-pressed="false" onclick="handleBtnClick(event)" 
       onKeyPress="handleBtnKeyPress(event)">
        <b style="color: white">Menu
        </b></span>
    </button>

  <div class="collapse f" id="navbarResponsive">
    <ul class="navbar-nav adn">
      <li class="md active">
        <a class="mb" href="index.html">Inicio <span class="zt">(current)</span></a>
      </li>
      <li class="md">
        <a class="mb" href="">Babblers</a>
      </li>
      <li class="md">
        <a class="mb" data-toggle="modal" href="#msgModal">Mensajes</a>
      </li>
      <li class="md">
        <a class="mb" href="#">Lanzamientos</a>
      </li>

      <li class="md">
        <a class="mb" href="#">Notificaciones</a>
      </li>
      <li class="md se">
        <a class="mb" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </li>

    </ul>

    <form class="kl zc ro sk">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>

    <ul id="#js-popoverContent" class="nav navbar-nav zc aah ro sk">
      <li class="md aax">
        <button class="cg bll blm bkf" data-toggle="popover">
          <img class="rl" src="{{asset ('img/lognavbar.png')}}">
        </button>
      </li>
    </ul>

    <ul class="nav navbar-nav ro" id="js-popoverContent">
      <li class="md"><a class="mb" href="#" data-action="growl">{{Auth::user()->name}}</a></li>
      <li class="md"><a class="mb" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>
</nav>
    <script src="https://bootstrap-themes.github.io/application/assets/js/jquery.min.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/popper.min.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/chart.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/toolkit.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
  </body>
</html>

