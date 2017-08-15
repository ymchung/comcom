<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle', 'ComCom')</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

  	{{-- <link rel="icon" type="images/png" sizes "66 x 47" href="images/icono.png"> --}}
  	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<link rel="stylesheet" id="cssArchivo" href="css/style.css">

</head>

<body>
  <div class="container-index">
  <header>
      <div class="header-container">
        <div class="header-subcontainer">
          <div id=logo>
              <a href="{{ url('/') }}"><img src="storage/images/logo-comcom.png" alt="logo"></a>
          </div>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-right">
          <!-- Authentication Links -->
              @if (Auth::guest())
                <div class="login-button">
                  <li><a href="{{ route('login') }}">INGRESAR</a></li>
                </div>
                <div class="signup-button">
                  <li><a href="{{ route('register') }}">REGISTRATE</a></li>
                </div>
              @else
              <li>
                <input class="menu-open" type="checkbox" id="menu-event">

                  <label class="menu-open" for="menu-event">
                    <p>{{ Auth::user()->name }}</p>
                  </label>

                </input>

                <nav class="dropdown-menu">
                  <ul class="dropdown-container">
                    <li>
                    @if (auth()->user()->role === 'admin')
                      <a href="{{ route('index') }}"> Panel administrador </a>
                    @else
                      <a href="{{ route('myaccount') }}"> Mi cuenta </a>
                    @endif
                    </li>

                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </nav>
              </li>
              @endif
            </li>
            </ul>
        </div>


          <!-- header menu	 -->
          <input class="nav-open" type="checkbox" id="header-event">

            <label class="nav-open" for="header-event">
                  <i class="ion-navicon-round"></i>
            </label>
          </input>

          <nav class="nav-header">
              <ul>
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ route('products') }}">Productos</a></li>
                  <li><a href="{{ url('faqs') }}">Preguntas</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
          </nav>
      </div>

  </header>

      @yield('content')

  </div>
    <footer>
              <nav class="footer-terms">
                <ul>
                  <li><a href="#">Términos y Condiciones</a></li>
                  <li><a href="#">Políticas de privacidad</a></li>
                  <li><a href="#">Políticas de cookies</a></li>
                </ul>
              </nav>
            <span class="footer-bottom"><p>© 2017 | ComCom Todos los derechos reservados</p></span>
          </footer>



          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        	<script>
        		$('.toggle-cat').click(function() {
        			$('.cat ul').slideToggle('medium')
        		})
        	</script>

          <script language="javascript">
          function toggleState(item){
               if(item.className == "ion-toggle") {
                   document.getElementById("cssArchivo").href="css/styles.css";
                      item.className="ion-toggle-filled";
               } else {
             document.getElementById("cssArchivo").href="css/stylesOscuro.css";
             item.className="ion-toggle";
               }
          }
          </script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
