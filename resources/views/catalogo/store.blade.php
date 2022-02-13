<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
    <script src="{{asset("js/product/store.js")}}" defer></script>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" id="subirProd">
        @csrf
        <input name="nombre" id="nombre" placeholder="nombre" value="Television">
        <input name="descripcion" id="descripcion" placeholder="descripcion" value="sjsjakndsak">
        <input name="cantidad" id="cantidad" placeholder="cantidad" value="12">
        <select name="visibilidad" id="visibilidad">
            <option value="1" selected>Visible</option>
            <option value="2">Oculto</option>
        </select>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>

            @endforeach
        </select>
        <input name="precio_base" id="precio_base" placeholder="precio_base" value="1">
        <input name="impuestos" id="impuestos" placeholder="impuestos" value="1">
        <input name="descuento" id="descuento" placeholder="descuento" value="1">
        <input type="file" name="prod-img[]" id="prod-img" multiple>
        <input type="submit" id="enviar">
    </form>
</body>
</html>

