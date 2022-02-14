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

    let formData = new FormData(formulario);
    console.log([...formData.entries()]);
    let response = await fetch('/api/productos/' + prodId, {
        method: 'POST',
        body: formData
    });
    let result = await response.json();
    console.log(result);
    alert("Producto " + result.nombre + " actualizado");
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
