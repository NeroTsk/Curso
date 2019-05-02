<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">   
        <link href="{{ url('css/style.css') }}" rel="stylesheet"> 
        <script src="{{ mix('js/app.js') }}"></script>       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark col-12">
              <div class="col-3">
                  <a class="navbar-brand float-left" href="#"><img src=""><img src="">TESTE</a>
                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
                <div class="col-6 d-flex justify-content-center" id="navbarCollapse">
                    <ul class="nav d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    </div>
              <div class="col-3">
                <ul class="nav flex-row ml-md-auto d-none d-md-flex float-right">
                <li class="nav-item">
                  <a href="https://www.instagram.com/?hl=pt-br" target="_blank">
                    <img src="images/insta.ico" width="30" height="30">
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com/login?lang=pt" target="_blank">
                    <img src="images/twitter.png" width="30" height="30">
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.facebook.com/" target="_blank">
                    <img src="images/face.ico" width="30" height="30">
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/NeroTsk/Curso/tree/master/Projeto" target="_blank">
                    <img src="images/git.ico" width="30" height="30">
                  </a>
                </li>
              </ul>
              </div>
            </nav>
        </header>
        <main>
        @yield('content')
       </main>
       <footer>
       <p>Made By Tsk</p>
       </footer>
    </body>
</html>
