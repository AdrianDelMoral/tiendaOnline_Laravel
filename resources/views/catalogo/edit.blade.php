<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto - {{ $product->nombre }}</title>
    <script src="{{ asset('js/product/edit.js') }}" defer></script>
</head>

<body>

    <form method="POST" id="editForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" value="{{ $product->id }}" id="prodId" hidden>
        <label for="nombre">Nombre:</label>
        <input name="nombre" id="nombre" value="{{ $product->nombre }}">
        <br><br>
        <label for="descripcion">descripcion</label>
        <textarea name="descripcion" id="descripcion">{{ $product->descripcion }}</textarea>
        <br><br>
        <label for="visibilidad">visibilidad:</label>
        <input name="visibilidad" id="visibilidad" type="number" value="{{ $product->visibilidad }}">
        <br><br>
        <label for="category_id">Categoria: </label>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="precio_base">Precio base:</label>
        <input name="precio_base" id="precio_base" type="text" value="{{ $product->precio_base }}">
        <br><br>
        <label for="cantidad">Cantidad: </label>
        <input id="cantidad" name="cantidad" value="{{ $product->cantidad }}">
        <br><br>
        <label for="impuestos">Impuestos:</label>
        <input name="impuestos" id="impuestos" type="text" value="{{ $product->impuestos }}">
        <br><br>
        <label for="descuento">Descuento:</label>
        <input name="descuento" id="descuento" type="text" value="{{ $product->descuento }}">
        <br><br>


        <input type="file" name="prod-img[]" id="prod-img" multiple>

        <br><br>
        <input type="submit" id="actualizar" value="Actualizar Producto">
    </form>
    <form id="deleteProdForm" method="post">
        @csrf
        @method('DELETE')
        <button id="eliminarProd">Eliminar Producto</button>
    </form>
    <div id="galeria">
        @foreach ($product->images as $imagen)
            <form method="POST">
                @csrf
                @method('DELETE')
                <img src="{{ '/storage/' . $imagen->img_path }}"><img>
                <button id="{{ $imagen->id }}" class="deleteImg">x</button>
            </form>
        @endforeach
    </div>
</body>

</html>
