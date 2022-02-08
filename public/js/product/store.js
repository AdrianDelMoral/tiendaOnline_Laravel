//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirProd");
    let nombre = document.body.querySelector("#nombre");
    let descripcion = document.body.querySelector("#descripcion");
    let visibilidad = document.body.querySelector("#visibilidad");
    let category_id = document.body.querySelector("#category_id");
    let precio_base = document.body.querySelector("#precio_base");
    let impuestos = document.body.querySelector("#impuestos");
    let descuento = document.body.querySelector("#descuento");


    let response = await fetch('/api/agregarProducto', {
        method: 'POST',
        body: new FormData(formulario)
    });

    let result = await response.json();

    if (response.status === 200) {
        alert("El producto: " + result.nombre + " ha sido creado con éxito");
    } else {
        alert("Ha ocurrido un error, vuelve a intentarlo");
    }
}
