<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head'){{-- Se incluirá el trozo de head de partials/nav.blade.php --}}
    <link rel="stylesheet" href="{{URL::asset('css/catalogo.css')}}">{{-- Se incluirá el css de public/css/catalogo.css --}}
    <title>@yield('titulo')</title>{{-- Titulo de catalogo --}}
</head>
<body>
    <nav>
        @include('partials.nav'){{-- Se incluirá el nav de partials/nav.blade.php --}}
    </nav>
    @yield('cuerpo')
    <footer>
        @include('partials.footer'){{-- Se incluirá el nav de partials/nav.blade.php --}}
    </footer>
</body>
</html>
