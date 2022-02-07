//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

function sendForm(event) {
    //campos
    let campos = document.body.querySelector("#nombre");



    let formData = new FormData([form]);


    event.preventDefault();
    let promesa = fetch('/api/agregarProducto', {
        headers: {
            "Content-Type": "text/plain;charset=UTF-8"
        },
        body: formData,
    });
}
