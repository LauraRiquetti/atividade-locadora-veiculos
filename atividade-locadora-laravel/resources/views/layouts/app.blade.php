<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title", "CRUD Carros")</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light d-flex flex-column min-vh-100">
        <div class="mb-1">
            <nav class="navbar navbar-expand-lg bg-white border-bottom">
                <div class="container">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resources/views/carros/index.blade.php">Carros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Alugueis</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="container py-4 flex-fil">
            @if(session('sucess'))
                <div class="alert alert-sucess">{{session('sucess') }}</div>
            @endif

            @yield('content')
        </main>

        <footer class="bg-white border-top mt-auto">
            <div class="container py-3 text-center text-muted small">
                Projeto CRUD - Locadora de Carro . {{date('Y')}}
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      </body>
</html>