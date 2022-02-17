//codigo JS la API de crear producto.

let envioBtn = document.body.querySelector("#enviar");

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirProd");
    let nombre = document.body.querySelector("#nombre").value;
    let cantidad = document.body.querySelector("#cantidad").value;
    let descripcion = document.body.querySelector("#descripcion").value;
    let visibilidad = document.body.querySelector("#visibilidad").value;
    let category_id = document.body.querySelector("#category_id").value;
    let precio_base = document.body.querySelector("#precio_base").value;
    let impuestos = document.body.querySelector("#impuestos").value;
    let descuento = document.body.querySelector("#descuento").value;
    let prod_img = document.body.querySelector("#prod-img").value;

    let hid_nombre = document.body.querySelector("#hid_nombre");
    let hid_cantidad = document.body.querySelector("#hid_cantidad");
    let hid_descripcion = document.body.querySelector("#hid_descripcion");
    let hid_visibilidad = document.body.querySelector("#hid_visibilidad");
    let hid_category_id = document.body.querySelector("#hid_category_id");
    let hid_precio_base = document.body.querySelector("#hid_precio_base");
    let hid_impuestos = document.body.querySelector("#hid_impuestos");
    let hid_descuento = document.body.querySelector("#hid_descuento");
    let hid_prod_img = document.body.querySelector("#hid_prod_img");

    let formData = new FormData(formulario);
    //console.log([...formData.entries()]);
    let response = await fetch('/api/productos', {
        method: 'POST',
        body: formData
    });
    let result = await response.json();
    let errores = result.errors;
    //ERROR
    if (response.status !== 201) {
        for (let err of Object.entries(errores)) {
            console.log(err);
            switch (err[0]) {
                case "nombre":
                    if ((nombre === "") || (nombre === null) || (nombre.length > 10) || (nombre.length < 5))
                        hid_nombre.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "cantidad":
                    if ((cantidad === "") || (cantidad < 0))
                        hid_cantidad.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "descripcion":
                    if ((descripcion === "") || (descripcion.length < 10) || (descripcion.length > 255))
                        hid_descripcion.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "visibilidad":
                    if ((visibilidad !== "Visible") || (visibilidad !== "Oculto"))
                        hid_visibilidad.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "category_id":
                    if ((category_id === "") || (!Number.isInteger(category_id)))
                        hid_category_id.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "precio_base":
                    if ((precio_base === "") || (!Number.isInteger(precio_base)) || (precio_base.length < 0))
                        hid_precio_base.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "impuestos":
                    if ((impuestos === "") || (!Number.isInteger(impuestos))  || (impuestos.length < 0))
                        hid_impuestos.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "descuento":
                    if ((descuento === "") || (!Number.isInteger(descuento))  || (descuento.length < 0))
                        hid_descuento.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "prod_img":
                    if (prod_img < 1)
                        hid_prod_img.innerHTML = "* The image field is required." + "<br>";
                    break;
            }
            setTimeout(displayError, 10000);

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
        alert("El producto: " + result.producto + " ha sido creado con éxito");
        window.location.href = "/catalogo";
    }

}

