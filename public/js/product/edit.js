let actualizarBtn = document.body.querySelector("#actualizar");
let prodId = document.body.querySelector("#prodId").value;
actualizarBtn.onclick = actualizarProd;
let formulario = document.body.querySelector("#galeria");

//boton de eliminar el producto
let eliminarProdBtn = document.body.querySelector("#eliminarProd")
eliminarProdBtn.onclick = deleteProd;


//boton de borrar imgs
formulario.onclick = deleteImg;

async function actualizarProd(event) {

    event.preventDefault();
    let formulario = document.body.querySelector("#editForm");
    // let formData = new FormData(formulario);

    // console.log([...formData.entries()]);

    //conversion a JSON del formulario

    // let json = JSON.stringify(formData);
    // console.log(json);
    //campos
    let nombre = document.body.querySelector("#nombre").value;
    let cantidad = document.body.querySelector("#cantidad").value;
    let descripcion = document.body.querySelector("#descripcion").value;
    let visibilidad = document.body.querySelector("#visibilidad").value;
    let category_id = document.body.querySelector("#category_id").value;
    let precio_base = document.body.querySelector("#precio_base").value;
    let impuestos = document.body.querySelector("#impuestos").value;
    let descuento = document.body.querySelector("#descuento").value;

    let hid_nombre = document.body.querySelector("#hid_nombre");
    let hid_cantidad = document.body.querySelector("#hid_cantidad");
    let hid_descripcion = document.body.querySelector("#hid_descripcion");
    let hid_visibilidad = document.body.querySelector("#hid_visibilidad");
    let hid_category_id = document.body.querySelector("#hid_category_id");
    let hid_precio_base = document.body.querySelector("#hid_precio_base");
    let hid_impuestos = document.body.querySelector("#hid_impuestos");
    let hid_descuento = document.body.querySelector("#hid_descuento");

    function errorValidation(){
        let cont = false;
        if ((nombre === "") || (nombre === null) || (nombre.length > 50) || (nombre.length < 5)){
            hid_nombre.innerHTML = "* The nombre field is required, less than 50 and more than 5." + "<br>";
            cont = true;
        }
        if ((cantidad === "") || (cantidad < 0)){
            hid_cantidad.innerHTML = "* The cantidad field is required." + "<br>";
            cont = true;
        }
        if ((descripcion === "") || (descripcion.length < 10) || (descripcion.length > 255)){
            hid_descripcion.innerHTML = "* The descripcion field is required, less than 255 and more than 10." +  "<br>";
            cont = true;
        }
        if (category_id === "Selecciona la categoria del producto"){
            hid_category_id.innerHTML = "* The category id field is required, integer." + "<br>";
            cont = true;
        }
        if ((precio_base === "") && (!Number.isInteger(precio_base)) || (precio_base.length < 0)){
            hid_precio_base.innerHTML = "* The precio base field is required, integer and more than 0." + "<br>";
            cont = true;
        }
        if ((impuestos === "") && (!Number.isInteger(impuestos))  || (impuestos.length < 0)){
            hid_impuestos.innerHTML = "* The impuestos field is required, integer and more than 0." + "<br>";
            cont = true;
        }
        if ((descuento === "") && (!Number.isInteger(descuento))  || (descuento.length < 0)){
            hid_descuento.innerHTML = "* The descuento field is required, integer and more than 0." + "<br>";
            cont = true;
        }

        if (visibilidad === "Selecciona la Visibilidad del producto"){
            hid_visibilidad.innerHTML = "* The visibilidad field is required." + "<br>";
            cont = true;
        }

        setTimeout(displayError, 10000);
        return cont;
    }

    let comprobarErrores = errorValidation();
    if(!comprobarErrores){
        let formData = new FormData(formulario);
        //console.log([...formData.entries()]);
        let response = await fetch('/api/productos/' + prodId , {
            method: 'POST',
            body: formData
        });
        let result = await response.json();
        let errores = result.errors;
        //ERROR
        if (response.status === 400) {
            for (let err of Object.entries(errores)) {
                console.log(err);
                switch (err[0]) {
                    case "nombre":
                            hid_nombre.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "cantidad":
                            hid_cantidad.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "descripcion":
                            hid_descripcion.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "visibilidad":
                            hid_visibilidad.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "category_id":
                            hid_category_id.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "precio_base":
                            hid_precio_base.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "impuestos":
                            hid_impuestos.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "descuento":
                            hid_descuento.innerHTML = "*" + err[1] + "<br>";
                        break;
                }
                setTimeout(displayError, 3000);

            }

        }
        //RESPUESTA CORRECTA
        if (response.status === 201) {
            alert("El producto: " + result.producto + " ha sido editado con éxito");
            window.location.href = "/catalogo";
        }
    }


    function displayError() {
        let p = formulario.querySelectorAll("p");
        for (let node of p) {
            node.textContent = "";
        }

    }
}

async function deleteImg(event) {
    if (!event.target.classList.contains('deleteImg')) {
        return;
    }
    event.preventDefault();
    let imgId = event.target.id;
    let formulario = event.target.closest("form");
    console.log(formulario);
    let formData = new FormData(formulario);

    console.log(formData);
    let response = await fetch('/api/image/' + imgId, {
        method: 'POST',
        body: formData
    });

    if(response.status !==204){
        alert("Ha ocurrido un error desconocido");
        return;
    }

    formulario.parentElement.remove();
}

async function deleteProd(event) {
    event.preventDefault();
    await deleteAllImgs();
    let formulario = document.body.querySelector("#deleteProdForm");
    let formData = new FormData(formulario);
    let response = await fetch('/api/productos/' + prodId, {
        method: 'POST',
        body: formData
    });

    alert("Producto Eliminado");
    window.location.href = "/";
}

async function deleteAllImgs(){
    let imgs = document.body.querySelectorAll(".deleteImg");
    for (let img of imgs){
        let response = await fetch('/api/image/' + img.id, {
            method: 'POST',
            body: new FormData(img.closest("form"))
        });
    }

}
