async function fillTable(){
    let localProducts = JSON.parse(localStorage.getItem("carrito"));

    let tbody = document.body.querySelector(".border-dark");

    for (let i = 0; i < localProducts.length; i++) {

        console.log(localProducts[i].cantidad);
        console.log(i)
        let tr = document.createElement("tr");
        let response = await fetch("/api/productos/"+localProducts[i].product);
        let result = await response.json();

        console.log(result);
        tbody.append(tr);
        for (let j = 0; j < 5; j++) {
            let td = document.createElement("td");
            switch (j){
                case 0:
                    td.textContent = result[0].nombre
                    tr.append(td);
                    let image = document.createElement("img");
                    image.src = "/storage/"+result[0].images[0].img_path;
                    image.style.width = "30%";
                    image.style.float = "left";

                    td.append(image);
                    console.log(result[0].nombre)
                    break;
                case 1:

                    td.textContent = result[0].precio_base
                    break;
                case 2:
                    td.textContent = localProducts[0].cantidad;
                    break;
                case 3:
                    td.textContent = (Number(result[0].precio_base))*(Number(localProducts[0].cantidad));
                    break;
                case 4:
                    // td.classList.append("text-center");
                    // let form = document.createElement("form");
                    // form.method = "POST"
                    // form.classList.append("mt-5");
                    // form.innerHTML = '@csrf @method("DELETE")';
                    // td.append(form);

                    // let input = document.createElement("input")

            }
            tr.append(td);
        }

    }


    console.log(localProducts);
    return;
}

fillTable();
