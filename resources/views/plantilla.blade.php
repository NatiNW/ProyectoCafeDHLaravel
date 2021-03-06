<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eeaa0807dc.js"></script>
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/miPerfil.css">

    <title>Coffee Code</title>
  </head>
<body>
  <header>
<div class="">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <nav class="navbar navbar-expand navbar-light bg">
    <div class="collapse navbar-collapse navsuperior" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link">Coffee Code</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">


        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Logueate') }}</a><i class="fas fa-sign-in-alt"></i>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a><i class="fas fa-sign-in-alt"></i>
                </li>
            @endif
        @else

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <img src="/storage/{{ Auth::user()->avatar }}" id="avatar" alt="">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Desloguearme') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('tienda') }}"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="{{ url('miPerfil') }}">Mi Perfil</a>
        </li>
        @endguest


      </ul>
    </div>
</nav>
</div>
</div>



<div class="container">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navinferior">

      <nav class="navbar navbar-expand-lg navbar-light bg">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="/img/pocilloinicioblanco.png" alt="Coffee">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navprincipal" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('listadoProductos')}}">Productos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('preguntasFrecuentes')}}">Preguntas Frecuentes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('contacto')}}">Contacto</a>
            </li>

            @if (Auth::user())
            <li class="nav-item active">
              <a class="nav-link" href="{{url('tienda')}}">Tienda</a>
            </li>
          @endif

            @if(Auth::user()&&(Auth::user()->admin))
            <li>
           <a class="nav-link" href="{{url('administrador')}}">Administrador</a>
            </li>
           @endif

          </ul>

        </div>
      </nav>

    </div>
    </div>
    </div>

    </header>


@yield('admin')

@yield('productos')

@yield('nosotros')

@yield('faq')

@yield('contacto')

@yield('tienda')

@yield('principal')

<footer class='container '>
  <div class="row">


  <div class="col-md-6 footer-identidad">
  <h6>Coffee Code</h6>
  <ul>
    <li><a href="{{url('/')}}">Inicio</a></li>
    <li><a href="{{url('listadoProductos')}}">Productos</a></li>
  @if (Auth::user())
    <li><a href="{{url('tienda')}}">Tienda</a></li>
  @endif
    <li><a href="{{url('nosotros')}}">Nosotros</a></li>
    <li><a href="{{url('preguntasFrecuentes')}}">Preguntas Frecuentes</a></li>
    <li><a href="{{url('contacto')}}">Contactanos</a></li>
  </ul>
</div>



  <div class="col-md-6 footer-redes">
    <h6>Redes</h6>
    <ul>
      <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
      <li><a href=""><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>

</div>

<div class="row">


  <div class="col-12">
    <p>Todos los derechos reservados</p>
      </div>
    </div>

</footer>

  </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
