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
    if (results.last_page === 1) {
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
    let row = document.createElement("div");// crea el atributo img
    row.className = 'row';
    contenido.append(row);
    for (let product of products) {
        // Divs Principales de las targetas
            let div_Main1 = document.createElement("div");
            div_Main1.className = 'col-md-6 col-lg-4 col-xl-3';
            row.append(div_Main1);

            let div_Main2 = document.createElement("div");
            div_Main2.className = 'single-product m-3';
            div_Main1.append(div_Main2);

        // PARTE 1 DE LA CARD
            let div_Main3 = document.createElement("div");
            div_Main3.className = 'single-product m-3';
            div_Main2.append(div_Main3);

            let div_part1_1 = document.createElement("div");
            div_part1_1.className = 'border border-secondary rounded part-1 row justify-content-center align-items-center';
            div_Main3.append(div_part1_1);

            let div_part1_2 = document.createElement("div");
            div_part1_2.className = 'carousel-inner';
            div_part1_1.append(div_part1_2);

            let div_part1_3 = document.createElement("div");
            div_part1_3.className = 'carousel-item active';
            div_part1_2.append(div_part1_3);

            let enlace1 = document.createElement("a"); // link por si le dá a la imágen
            enlace1.href = "/catalogo/" + product.id;
            div_part1_3.append(enlace1);

            let img = document.createElement("img");// crea el atributo img
            img.className = 'd-block w-100';
            img.src = "/storage/" + product.images[0].img_path;
            enlace1.append(img);

        // PARTE 2 DE LA CARD
            let div_part2_1 = document.createElement("div");
            div_part2_1.className = 'part-2';
            div_Main3.append(div_part2_1);

            let h1 = document.createElement("h1");
            h1.className = 'product-title text-center';
            div_part2_1.append(h1);

            let enlace2 = document.createElement("a");
            enlace2.href = "/catalogo/" + product.id; // añade la ruta al texto de abajo
            enlace2.textContent = product.nombre; // indica el nombre del producto como texto, al texto debajo de la imágen
            h1.append(enlace2);
    }
}
