    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container container-fluid py-3 d-flex justify-content-center">
            <div class="mb-2 mb-lg-0 logoPagina">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="{{asset('images/logo-pccomponentes.svg')}}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="d-flex ml-auto">
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
                            Carrito
                        </a>
                    </li>
            </div>
        </div>
    </nav>
