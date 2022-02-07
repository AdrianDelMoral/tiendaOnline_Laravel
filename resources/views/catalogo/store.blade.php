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
