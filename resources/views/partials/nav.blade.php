<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container container-fluid py-3 d-flex justify-content-center">
        <div class="mb-2 mb-lg-0 logoPagina">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('images/logo-componentesPC.svg') }}" class="max-width">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarMain"
            aria-controls="navBarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBarMain">
            <form class="d-flex ml-auto tamanyoInput">
                <input class="form-control me-2 buscadorNav" type="search" placeholder="Buscar..." aria-label="Search">
            </form>
            <ul class="navbar-nav me-auto mb-2 ml-lg-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/icon/perfil.png') }}" alt="Foto de perfil">
                        Mi cuenta
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        @auth
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li><a class="dropdown-item" id="logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit(); localStorage.removeItem('cantidad');">
                                        Cerrar Sesión
                                    </a>
                                </li>
                            </form>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="circulo">
                        <span class="circulo__inside">0</span>
                    </div>

                    <a class="nav-link active" href="{{ route('carrito.index') }}" id="navbarScrollingDropdown"
                        role="button" aria-expanded="false">
                        <img src="/images/icon/carrito.png">

                        Carrito
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
