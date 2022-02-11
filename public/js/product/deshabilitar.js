let borrarBtn = document.body.querySelector("#borrar");
let idProduct = document.body.querySelector("#idProduct").value;

borrarBtn.onclick = bajaProducto;

async function bajaProducto() {

    let response = await fetch('/api/productos/' + idProduct, {
        method: 'DELETE'

    });
    console.log(response.status);
    // if (response.status !== 200) {
    //     alert("Ha ocurrido un error al deshabilitar el producto");
    // }
    let result = await response.text();
    console.log(result);
    alert("Producto " + result.nombre + " puesto en oculto");
}
