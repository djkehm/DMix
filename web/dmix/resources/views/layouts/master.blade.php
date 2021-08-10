<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="vendor/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <title>DMix</title>
  </head>
  <body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fondoXD">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img class="logo" src="{{asset('img/logo.png')}}" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto gap-2 mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a href="{{route('home')}}"class="btn btn-outline-info">Home</a>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-outline-info">DJ's</button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-outline-info">MIX's</button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-outline-info">Solicitud de MIX's</button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn btn-outline-info">Solicitud de DJ</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    <footer class="fondoFooter text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="{{route('home')}}" role="button"
            ><img class="logo" src="{{asset('img/logo.png')}}" /></i
          ></a>
    
          
        </section>
        <!-- Section: Social media -->
    
    
        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            2 Estudiantes de la UTFSM de Chile se ha propuesto llevar la fiesta y discoteque
            a cualquier parte, donde sea que vayan simplemente en su bolsillo, generando así
            tambien una plataforma de marketing e ingresos para los ¡DJ's de todo el mundo!
          </p>
        </section>
        <!-- Section: Text -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="fondoXD text-center p-0.5">
        © 2021 Copyright:
        <a class="text-white" href="">DMIX</a>
      </div>
      <!-- Copyright -->
    </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>
    <!-- Esto define una seccion que se va a llamar javascript -->
    @yield("javascript")

  </body>
</html>