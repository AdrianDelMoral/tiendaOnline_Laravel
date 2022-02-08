//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

function sendForm(event) {
    //campos
    let nombre = document.body.querySelector("#nombre");
    let descripcion = document.body.querySelector("#descripcion");
    let visibilidad = document.body.querySelector("#visibilidad");
    let category_id = document.body.querySelector("#category_id");
    let precio_base = document.body.querySelector("#");



    let formData = new FormData([form]);
    // formData.append("nombre", )

    event.preventDefault();
    let promesa = fetch('/api/agregarProducto', {
        headers: {
            "Content-Type": "text/plain;charset=UTF-8"
        },
        body: formData,
    });
}
