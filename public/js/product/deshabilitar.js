let borrarBtn = document.body.querySelector("#borrar");
let idProduct = document.body.querySelector("#idProduct").value;

borrarBtn.onclick = bajaProducto;

async function bajaProducto() {
    let formulario = document.body.querySelector("#formDisable");
    let response = await fetch('/api/productos/deshabilitar/' + idProduct, {
        method: 'POST',
        body: new FormData(formulario)
    });
    console.log(response.status);
    // if (response.status !== 200) {
    //     alert("Ha ocurrido un error al deshabilitar el producto");
    // }
    let result = await response.json();
    console.log(result);
    alert("Producto " + result.nombre + " puesto en oculto");
}
