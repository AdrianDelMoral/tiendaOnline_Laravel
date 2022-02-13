let productHandler = document.body.querySelector(".section-products");
productHandler.onclick = storeProduct;



async function storeProduct(event) {
    if (event.target.classList.contains('fa-shopping-cart')) {
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
