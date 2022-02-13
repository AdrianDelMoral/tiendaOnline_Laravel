let productHandler = document.body.querySelector(".section-products");
productHandler.onclick = storeProduct;



async function storeProduct(event) {
    if (event.target.classList.contains('fa-shopping-cart')) {
        let cantidad = await checkCantidad(event);
        if (cantidad === 0) {
            return;
        }
        let formulario = event.target.closest('form');
        let response = await fetch('/api/carrito', {
            method: 'POST',
            body: new FormData(formulario)
        });

        if (response.status !== 201) {
            alert("Ha ocurrido un error al agregar el elemento al carrito");
            return;
        }
        let result = await response.json();
    }

    //let response = fetch
}

async function checkCantidad(event) {
    let formulario = event.target.closest("form");
    let prodId = formulario.querySelector("#product_id").value;

    let response = await fetch("/api/productos", {
        method: 'GET'
    });
    let productos = await response.json();

    //RECORRER PARA BUSCAR SI EL PRODUCTO TIENE O NO STOCK

    for (let producto of productos) {

        if (prodId == producto.id) {
            if (producto.cantidad === 0) {
                alert("El articulo seleccionado actualmente se encuentra fuera de stock");
                return 0;
            }
        }
    }

}
