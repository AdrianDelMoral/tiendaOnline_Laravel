
addBtn = document.body.querySelector("#addBtn");
addBtn.onclick = addToCart;


async function addToCart(event){
    let formulario = document.body.querySelector("#addCartForm");

    let response = await fetch('/api/carrito', {
        method: 'post',
        body: new FormData(formulario)
    });

    if(response.status !== 201){
        alert("Ha ocurrido un error al agregar el elemento al carrito");
    }
}
