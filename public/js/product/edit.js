let actualizarBtn = document.body.querySelector("#actualizar");
let prodId = document.body.querySelector("#prodId").value;
actualizarBtn.onclick = actualizarProd;


async function actualizarProd(event) {
    event.preventDefault();
    let formulario = document.body.querySelector("#editForm");
    let formData = new FormData(formulario);

    console.log([...formData.entries()]);

    //conversion a JSON del formulario
    let object = {};
    formData.forEach((value, key) => object[key] = value);
    let json = JSON.stringify(object);
    console.log(json);

    let response = await fetch('/api/productos/' + prodId, {
        method: 'PUT',
        body: json,
        headers: {
            'Content-Type': 'application/json',
        },
    });

    console.log(response);
    let result = await response.text();
    console.log(result);
    alert("Producto " + result.nombre + " actualizado");
}
