//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirProd");
    let nombre = document.body.querySelector("#nombre");
    let descripcion = document.body.querySelector("#descripcion");


    let response = await fetch('/api/agregarCategoria', {
        method: 'POST',
        body: new FormData(formulario)
    });

    let result = await response.json();

    if (response.status === 200) {
        alert("La categoria: " + result.nombre + " ha sido creada con éxito");
    } else {
        alert("Ha ocurrido un error, vuelve a intentarlo");
    }
}
