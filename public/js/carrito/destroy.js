let deleteHandler = document.body.querySelector(".border-dark");
deleteHandler.onclick = clearProduct;

let vaciarCesta = document.body.querySelector("#vaciarCesta");
vaciarCesta.onclick = clearCart;

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


async function clearCart(event){
    if(event.target.classList.contains('btn-danger') || (event.target.classList.contains('fa-trash'))){
        event.preventDefault();
        let deleteContainer = document.body.querySelectorAll(".mt-5");

        for(let deleteform of deleteContainer){
            let idCart = deleteform.querySelector("#cartId").value;
            let response = await fetch("/api/carrito/" + idCart,{
                method: 'post',
                body: new FormData(deleteform)
            });

            let result = await response.text();
            console.log(result);
        }
    }
}
