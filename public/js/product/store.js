/* //codigo JS la API de crear producto.

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

    if (nombre.value === "") {
        //alert("El nombre no está definido");
        //return;
    }

    let formData = new FormData(formulario);
    //console.log([...formData.entries()]);
    let response = await fetch('/api/productos', {
        method: 'POST',
        body: formData
    });
    let result = await response.text();//.json();


    if (response.status !== 201) {
        alert("ERROR: "+result.error);
        return;
    }

    console.log(result);
    console.log(response.status);

    alert("El producto: " + result.producto + " ha sido creado con éxito");
    console.log(formulario);

}

 */
