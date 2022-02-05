<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Librería de FA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/inicio.css')}}">
    <title>Nav</title>
</head>

<body>
    <nav>
        <div class="bordes">
            <div class="ordenar1">
                <div class="logoPagina">
                    <img src="{{asset('images/logo-pccomponentes.svg')}}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="d-flex ml-auto tamanyoInput">
                    <input class="form-control me-2 buscadorNav" type="search" placeholder="Buscar..." aria-label="Search">
                </form>
                <ul class="navbar-nav me-auto mb-2 ml-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/icon/perfil.png')}}" alt="">
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/icon/carrito.png')}}">
                            <p>Mi Carrito</p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>
