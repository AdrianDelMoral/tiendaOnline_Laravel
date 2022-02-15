//codigo JS la API de crear direccion.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirAddress");
    let calle = document.body.querySelector("#calle");
    let patio = document.body.querySelector("#patio");
    let puerta = document.body.querySelector("#puerta");
    let numero = document.body.querySelector("#numero");
    let cod_postal = document.body.querySelector("#cod_postal");
    let ciudad = document.body.querySelector("#ciudad");
    let provincia = document.body.querySelector("#provincia");
    let pais = document.body.querySelector("#pais");

    if (calle.value === "") {
        /* alert("La calle no está definida");
        return; */
    }

    let formData = new FormData(formulario);
    //console.log([...formData.entries()]);
    let response = await fetch('/api/direccion', {
        method: 'POST',
        body: formData
    });
    let result = await response.json();


    if (response.status !== 201) {
        alert("ERROR: "+result.error);
        return;
    }

    console.log(result);
    console.log(response.status);

    alert("La dirección: " + result.direccion + " ha sido creada con éxito");
    console.log(formulario);

}

