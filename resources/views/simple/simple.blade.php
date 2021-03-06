<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{{ asset('img/icon.png') }}}">

        <title>Cleaning company</title>
  </head>
  <body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">
                <img src="{{{ asset('img/icon2.png') }}}" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('employee')}}">Funcionário</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('items')}}">Items</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shedule')}}">Quadro de horas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('document')}}">Documentos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('employee')}}">Funcionário</a></li>
                            <li><a class="dropdown-item" href="{{route('items')}}">Items</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" href="{{route('document')}}">Documentos</a></li>
                            <li><a class="dropdown-item" href="{{route('newDocumento')}}">Novo documento</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" href="{{route('shedule')}}">Quadro de horas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar algo" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="fixed-bottom" style="background-color: #e3f2fd;">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2021 Copyright:
            <a class="text-dark" href="#">Companhia de limpeza S/A</a>
        </div>
        <!-- Copyright -->
    </footer>
  </body>
</html>
