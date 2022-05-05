<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" sizes="32x32" href="{{ asset('imgs/favicon.ico') }}" />
    <title>El Faro</title>
    <!-- Se enlazan las fuentes de google al html -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Anek+Odia:wght@400;700&display=swap" rel="stylesheet" />
    <!-- importar bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
  </head>
  <body>
    <header>
      <div class="container">
        <!-- Este es el menú de la pagina -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-main">
            <div class="d-flex justify-content-between align-items-center">
              <a class="navbar-brand" href="{{route('home') }}">
                <img src="{{ asset('imgs/logo_rsi.png') }}" alt="logo" width="35" height="35" class="d-inline-block align-text-top" />
                El Faro
              </a>
              <div>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                    <li>
                      <button class="navbar-close">
                        <!-- Poner icono de cierre -->
                        X
                      </button>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('deporte') }}">Deporte</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('negocios') }}">Negocios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Reloj -->
    <div class="watch-banner">
      <div class="container">
        <div class="d-flex align-items-end justify-content-end">
          <div class="d-flex">
            <span id="fecha" class="mr-3 text-warning"></span>
          </div>
          <div class="d-flex">
            <span id="reloj" class="text-warning"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid all-page">
        @yield('home')
        @yield('contacto')
        @yield('deporte')
        @yield('negocios')
    </div>
    <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-sm-5">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('imgs/logo_rsi.png') }}" heigth="50" width="50" class="footer-logo" alt="footer-logo" />
                  <h4>El Faro</h4>
                </div>
                <h5 class="font-weight-normal mt-4 mb-5">
                  El Faro es una marca de la empresa Trípode S.A. de C.V., radicada en El Salvador, fundada en 1998 por el periodista Carlos Dada y el empresario Jorge Simán, quienes fueron los únicos accionistas durante 16 años hasta que en 2014 se incorporó al accionariado José Luis Sanz. Como una concreción del carácter colectivo del proyecto, en 2015 se incorporaron como socios los periodistas Sergio Arauz, Daniel Valencia, Óscar Martínez, Carlos Martínez, Ricardo Vaquerano y Élmer Menjívar.
                </h5>
              </div>
              <div class="col-sm-4">
                <h3 class="font-weight-bold mb-3">Noticias Recientes</h3>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2">
                      <div class="row">
                        <div class="col-3">
                          <img
                            src="{{ asset('imgs/deporte2.jpg') }}"
                            alt="thumb"
                            class="img-fluid"
                          />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600">
                            Jarry se proclamó campeón del Challenger de Salinas
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2 pt-2">
                      <div class="row">
                        <div class="col-3">
                          <img
                            src="{{ asset('imgs/transportistas.png') }}"
                            alt="thumb"
                            class="img-fluid"
                          />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600">
                            Huelga de transportistas
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="pt-2">
                      <div class="row">
                        <div class="col-3">
                          <img
                            src="{{ asset('imgs/dinero3.jpg') }}"
                            alt="thumb"
                            class="img-fluid"
                          />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600 mb-3">
                            La Fed sube la tasa de interés 0,25 puntos en EE.UU.
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <h3 class="font-weight-bold mb-3">Categorías</h3>
                <div class="footer-border-bottom pb-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 font-weight-600">Deporte</h5>
                    <div class="count-category">3</div>
                  </div>
                </div>
                <div class="footer-border-bottom pb-2 pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 font-weight-600">Negocios</h5>
                    <div class="count-category">3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-sm-flex justify-content-between align-items-center">
                  <div class="fs-14 font-weight-600">
                    © 2022 @ <a href="#" target="_blank" class="text-white"> PRO301</a>. Todos los derechos reservados.
                  </div>
                  <div class="fs-14 font-weight-600">
                    Hecho con <a href="https://getbootstrap.com/" target="_blank" class="text-white">Bootstrap</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <script src="{{ asset('js/lib/moment.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>