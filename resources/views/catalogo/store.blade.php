<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <form action="/api/agregarProducto" method="POST">
        <input name="nombre" placeholder="nombre">
        <input name="descripcion" placeholder="descripcion">
        <select name="visibilidad">
            <option value="1">Visible</option>
            <option value="2" selected>Oculto</option>
          </select>
        <input name="category_id" placeholder="category_id">
        <input name="precio_base" placeholder="precio_base">
        <input name="impuestos" placeholder="impuestos">
        <input name="descuento" placeholder="descuento">
        <input type="submit">
    </form>
</body>
</html>

