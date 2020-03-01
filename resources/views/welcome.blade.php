<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravelijillo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="public/style.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Bienvenido</a>
        <div class="navbar-nav">

        @if (Route::has('login'))
          @auth

          @else
              <a class="boton1" href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a class="boton2" href="{{ route('register') }}">Register</a>
              @endif
          @endauth
        @endif

      </div>
      </div>
    </nav>
</header>

    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="title m-b-md">
                    Proyecto en Laravel de Bárbara Ramirez
                </div>

                <div class="links">
                    <a href="#">Peliculas</a>
                    <a href="#">Géneros</a>
                    <a href="#">Actores</a>
                    <a href="https://github.com/BLRam/Repositorio-nuevo.git">Versión Actualizada</a>
                    <a href="https://github.com/BLRam/repo-prueba.git">GitHub</a>
                </div>
            </div>
        </div>

        <footer>
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Todos los</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Botones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Vuelven al inicio</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special thanks</h5>
              <p class="card-text">A quien esté mirando, muchas gracias por pasar por mi footer espero que le haya gustado. Att: BR.</p>
              <a href="#" class="btn btn-primary">Volver al inicio</a>
            </div>
          </div>

        </footer>
    </body>
</html>
