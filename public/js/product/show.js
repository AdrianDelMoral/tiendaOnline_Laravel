let borrarBtn = document.body.querySelector("#borrar");
let idProduct = document.body.querySelector("#idProduct").value;

borrarBtn.onclick = bajaProducto;

async function bajaProducto(){

    let response = await fetch('/api/productos/deshabilitar/'+idProduct, {
        method: 'PUT'

    });
    console.log(response.status);
    let result = await response.json();
    console.log(result);
}
