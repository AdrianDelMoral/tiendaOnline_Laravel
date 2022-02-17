let productHandler = document.body.querySelector(".section-products");
productHandler.onclick = storeProduct;



setCartNum();
function setCartNum() {
    let cartNum = document.body.querySelector(".circulo__inside");
    cartNum.textContent = localStorage.getItem("cantidad");
}

async function storeProduct(event) {
    if (event.target.classList.contains('fa-shopping-cart')) {
        event.preventDefault();
        let cantidad = await checkCantidad(event);
        if (cantidad === 0) {
            return;
        }
        let formulario = event.target.closest('form');
        let response = await fetch('/api/carrito', {
            method: 'POST',
            body: new FormData(formulario)
        });

        if (response.status !== 201 && response.status!== 200) {
            alert("Ha ocurrido un error al agregar el elemento al carrito");
            return;
        }
        let result = await response.json();

        if(result === "invitado"){
            guestCart(event);
            return;
        }

        let cartNum = document.body.querySelector(".circulo__inside");
        console.log(result);
        cartNum.textContent = result.length;
        localStorage.setItem("cantidad", cartNum.textContent);

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

function guestCart(event){
    let formProducto = event.target.closest("form");
    let producto = formProducto.querySelector("#product_id").value;

    //COMPRUEBA SI EXISTE YA EL PRODUCTO E INCREMENTA LA CANTIDAD
    if(localStorage.getItem("carrito") === null){
        let cartModel = [{
            product: producto,
            cantidad: 1,
        }]
        localStorage.setItem("carrito", JSON.stringify(cartModel))
        return;

    }
    if(checkIfExistCart(producto)){
        return;
    }

    let cartModel = {
        product: producto,
        cantidad: 1,
    }

    //localStorage.setItem("carrito", JSON.stringify(cartModel))
    let a = JSON.parse(localStorage.getItem("carrito"));
    a.push(cartModel);
    localStorage.setItem("carrito", JSON.stringify(a))
}

function checkIfExistCart(productoForm){
    let productsLocal = JSON.parse(localStorage.getItem("carrito"));
    console.log(productsLocal);
    for (let producto of productsLocal){
        if(producto.product === productoForm){
            console.log("Incrementado");
            producto.cantidad = producto.cantidad +1;
            localStorage.setItem("carrito", JSON.stringify(productsLocal));
            return true;
        }
    }
}
