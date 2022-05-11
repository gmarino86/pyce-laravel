<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto  Laravel :: @yield('title')</title>

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= url('css/estilos.css') ?>">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= url('/') ?>">Gaston Marino - Erres</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir/cerrar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('about') ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('productos') ?>">Productos</a>
                    </li>
                    @if(auth()->guest())
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route('auth.login.form') ?>">Login</a>
                        </li>
                    @endif
                    @if(auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('admin/dashboard') ?>">Administración</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button class="btn btn-link nav-link">{{ auth()->user()->email }} (Salir)</button>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @if(Session::has('message.success'))
            <div class="alert alert-success mb-3">{!! Session::get('message.success') !!}</div>
        @endif
        @if(Session::has('message.error'))
            <div class="alert alert-danger mb-3">{!! Session::get('message.error') !!}</div>
        @endif

        @yield('main')
    </main>

    <footer class="footer">
        <p>Da Vinci &copy; 2022</p>
    </footer>
</div>

</body>
</html>
