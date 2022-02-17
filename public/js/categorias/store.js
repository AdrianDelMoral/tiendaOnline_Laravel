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

    function errorValidation() {

        let cont = false;
        if ((nombre === "") || (nombre === null) || (nombre.length < 5) || (nombre.length > 50)) {
            hid_nombre.innerHTML = "* The nombre field is required, less than 50 and more than 5." + "<br>";
            cont = true;
        }

        if ((descripcion === "") || (descripcion.length < 5) || (descripcion.length > 255)) {
            hid_descripcion.innerHTML = "* The descripcion field is required, less than 255 and more than 5." + "<br>";
            cont = true;
        }

        setTimeout(displayError, 3000);
        return cont;
    }

    let comprobarErrores = errorValidation();
    if (!comprobarErrores) {
        let formData = new FormData(formulario);
        //console.log([...formData.entries()]);
        let response = await fetch('/api/categorias', {
            method: 'POST',
            body: formData
        });
        let result = await response.json();
        let errores = result.errors;
        //ERROR
        if (response.status === 400) {
            for (let err of Object.entries(errores)) {
                switch (err[0]) {
                    case "nombre":
                        hid_nombre.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "descripcion":
                        hid_descripcion.innerHTML = "*" + err[1] + "<br>";
                        break;
                }
                setTimeout(displayError, 3000);

            }

        }

        //RESPUESTA CORRECTA
        if (response.status === 201) {
            alert("La categoria: " + result.Categoria + " ha sido creada con éxito");
            window.location.href = "/categorias";
        }
    }


    function displayError() {
        let p = formulario.querySelectorAll("p");
        for (let node of p) {
            node.textContent = "";
        }

    }
}
