let actualizarBtn = document.body.querySelector("#actualizar");
let prodId = document.body.querySelector("#prodId").value;
actualizarBtn.onclick = actualizarProd;


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
    let result = await response.text();
    console.log(result);
    alert("Producto " + result.nombre + " actualizado");
}
