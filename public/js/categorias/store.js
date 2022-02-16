//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirCategoria");
    let nombre = document.body.querySelector("#nombre").value;
    let descripcion = document.body.querySelector("#descripcion").value;


    let hid_nombre = document.body.querySelector("#hid-nombre");
    let hid_descripcion = document.body.querySelector("#hid-descripcion");

    let formData = new FormData(formulario);
    //console.log([...formData.entries()]);
    let response = await fetch('/api/agregarCategoria', {
        method: 'POST',
        body: formData
    });
    let result = await response.json();
    let errores = result.errors;

    //ERROR
    if (response.status !== 201) {
        for (let err of Object.entries(errores)) {
            switch (err[0]) {
                case "nombre":
                    if ((nombre === "") || (nombre === null) || (nombre.length > 10) || (nombre.length < 5))
                        hid_nombre.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "descripcion":
                    if ((descripcion === "") || (descripcion.length < 10) || (descripcion.length > 255))
                        hid_descripcion.innerHTML = "*" + err[1] + "<br>";
                    break;
            }
            setTimeout(displayError, 3000);
        }
    }

    function displayError() {
        let p = formulario.querySelectorAll("p");
        for (let node of p) {
            node.textContent = "";
        }

    }

    //RESPUESTA CORRECTA
    if (response.status === 201) {
        alert("La categoria: " + result.Categoria + " ha sido creada con éxito");
        window.location.href = "/";
    }
}
