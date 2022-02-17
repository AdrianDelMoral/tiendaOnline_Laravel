let eliminarHandler = document.querySelector(".table-responsive");
eliminarHandler.onclick = destroyAddress;


async function destroyAddress(event){
    if(event.target.id !== "eliminar"){
        return;
    }
    console.log(event.target);
    event.preventDefault();
    let form = event.target.parentElement;
    id = form.querySelector("#addressid").value;

    let response = await fetch("/api/direccion/"+id,{
        method: 'POST',
        body: new FormData(form)
    });

    let result = await response.text();
    console.log(result);
}
