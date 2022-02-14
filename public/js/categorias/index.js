let contenido = document.body.querySelector("#contenido");
let formularios = document.body.querySelector("#formularios");
let currentPage = document.body.querySelector("#currentpage");
formularios.onclick = loadCategories;

let cargarMas = document.body.querySelector("#cargarMas");
cargarMas.onclick = loadMore;

async function loadCategories(event) {
    if (!event.target.parentElement.classList.contains("categoriesSelector")) {
        return;
    }
    event.preventDefault();
    let categoriaInput = document.body.querySelector("#categoryId");
    categoriaInput.value = event.target.id;
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

    // if (!Array.isArray(results)) {
    //     console.log("njanj");
    //     for (let result of results.data) {
    //         contenido.innerHTML += result.nombre + "<br>";
    //     }
    // } else {
    //     for (let result of results) {
    //         contenido.textContent = result.nombre;
    //     }
    // }
    printProducts(results.data);
    if(results.last_page === 1){
        return;
    }
    //boton de cargar mas
    let cargarMas = document.body.querySelector("#cargarMas");
    cargarMas.hidden = false;

    currentPage.value = results.current_page;
}

async function loadMore(event) {
    let cargarMas = document.body.querySelector("#cargarMas");
    let categoryId = document.body.querySelector("#categoryId").value;
    let catId = Number(currentPage.value) + 1;
    //http://tiendaonline.test/api/categorias/1?page=1

    let response = await fetch('/api/categorias/' + categoryId + "?page=" + catId, {
        method: 'GET',
    });

    let results = await response.json();
    if (results.current_page == results.last_page) {
        cargarMas.hidden = true;
    }
    printProducts(results.data);
    currentPage.value = catId;
}


async function printProducts(products) {
    let contenido = document.body.querySelector("#contenido");
    for (let product of products) {
        let img = document.createElement("img");
        img.src = "/storage/"+product.images[0].img_path;
        contenido.append(img);

        let enlace = document.createElement("a");
        enlace.href = "/catalogo/" + product.id;
        enlace.textContent = product.nombre;

        contenido.append(enlace);

    }
}
