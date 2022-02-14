<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Componentes PC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarDashboard" aria-controls="navBarDashboard" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navBarDashboard">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Opciones de Inicio</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="/"><span class="fa-solid fa-house"></span> Página Principal</a></li>
                        <li><a class="dropdown-item" href="#"><span class="fa-solid fa-house-user"></span> Dashboard</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gestionar') }}"><span class="fa-solid fa-database"></span> Gestionar Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gestionar-user') }}"><span class="fa-solid fa-address-book"></span> Gestionar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fa-solid fa-chart-line"></span> Gestion de stock y ventas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
