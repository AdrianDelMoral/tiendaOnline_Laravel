<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/75b8de379c.js" crossorigin="anonymous"></script>

    <!-- Link CSS locales-->
    <link rel="stylesheet" href="{{ URL::asset('css/navFooter.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/carrito.css') }}">

    {{-- <script src="{{ asset('js/product/store.js') }}" defer></script> --}}
    <script src="{{ asset('js/carrito/destroy.js') }}" defer></script>


    <title>@yield('titulo')</title><!-- Titulo de catalogo -->
</head>

<body>
    @include('partials.nav'){{-- Se incluirá el nav de partials/nav.blade.php --}}
    @yield('cuerpo')
    @include('partials.footer'){{-- Se incluirá el nav de partials/nav.blade.php --}}
</body>

</html>
