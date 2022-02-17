let deleteHandler = document.body.querySelector(".border-dark");
deleteHandler.onclick = clearProduct;

let vaciarCesta = document.body.querySelector("#vaciarCesta");
vaciarCesta.onclick = clearCart;


setCartNum();
function setCartNum() {
    let cartNum = document.body.querySelector(".circulo__inside");
    cartNum.textContent = localStorage.getItem("cantidad");
}

async function clearProduct(event) {
    if (event.target.id === "deletebtn" || event.target.classList.contains("fa-trash")) {
        event.preventDefault();
        let formulario = event.target.closest("form");
        let idCart = formulario.querySelector("#cartId").value;


        let response = await fetch("/api/carrito/" + idCart, {
            method: 'post',
            body: new FormData(formulario)
        });

        let result = await response.text();
        console.log(result);

        contenido = event.target.closest("tr");
        cartElements = localStorage.getItem("cantidad");

        let cartNum = document.body.querySelector(".circulo__inside");
        cartNum.textContent = Number(localStorage.getItem("cantidad")) - 1;

        localStorage.setItem("cantidad", cartNum.textContent);

        let cantidad = contenido.children[2].children[0].textContent;
        let precio = contenido.children[3].children[0].textContent;

        cantidad = parseInt(cantidad);
        precio = parseFloat(precio);

        let precioTotal = document.body.querySelector("#preciototal");
        precioTotalStr = precioTotal.textContent.replace("€", "");
        precioTotalFloat = parseFloat(precioTotalStr);

        precioTotal.textContent = precioTotalFloat - (cantidad * precio) + "€";
        contenido.remove();

    }
}


async function clearCart(event) {
    if (event.target.classList.contains('btn-danger') || (event.target.classList.contains('fa-trash'))) {
        event.preventDefault();
        let deleteContainer = document.body.querySelectorAll(".mt-5");

        for (let deleteform of deleteContainer) {
            let idCart = deleteform.querySelector("#cartId").value;
            let response = await fetch("/api/carrito/" + idCart, {
                method: 'post',
                body: new FormData(deleteform)
            });

            let result = await response.text();
            console.log(result);

            contenido = deleteform.closest("tr");
            contenido.remove();

            let precioTotal = document.body.querySelector("#preciototal");
            precioTotal.textContent = "0€"

        }
    }
}
