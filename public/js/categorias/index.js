let contenido = document.body.querySelector("#contenido");
let formularios = document.body.querySelector("#formularios");

formularios.onclick = loadCategories;


async function loadCategories(event) {
    if (!event.target.parentElement.classList.contains("categoriesSelector")) {
        return;
    }
    event.preventDefault();
    contenido.innerHTML = "";
    console.log("hola");
    let categoryId = event.target.id;

    let response = await fetch('/api/categorias/' + categoryId, {
        method: 'POST',
        body: new FormData(event.target.parentElement)
    });
    //console.log(response)
    let results = await response.json();
    console.log(results);

    if (!Array.isArray(results)) {
        console.log("njanj");
        for (let result of Object.values(results)) {
            contenido.innerHTML += result.nombre + "<br>";
        }
    } else {
        for (let result of results) {
            contenido.textContent = result.nombre;
        }
    }

}
