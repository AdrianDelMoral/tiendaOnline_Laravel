let deleteHandler = document.body.querySelector(".border-dark");
deleteHandler.onclick = clearProduct;


async function clearProduct(event) {
    if (event.target.id === "deletebtn" || event.target.classList.contains("fa-trash")) {
        event.preventDefault();
        let formulario = event.target.closest("form");
        let idCart = formulario.querySelector("#cartId").value;


        let response = await fetch("/api/carrito/" + idCart,{
            method: 'post',
            body: new FormData(formulario)
        });

        let result = await response.text();
        console.log(result);
    }
}
