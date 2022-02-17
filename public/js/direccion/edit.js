//codigo JS la API de crear direccion.

let envioBtn = document.body.querySelector("#enviar");
let addressId = document.body.querySelector("#addressId").value;

envioBtn.onclick = sendForm;

async function sendForm(event) {

    event.preventDefault();
    //campos
    let formulario = document.body.querySelector("#subirAddress");
    let calle = document.body.querySelector("#calle").value;
    let patio = document.body.querySelector("#patio").value;
    let puerta = document.body.querySelector("#puerta").value;
    let numero = document.body.querySelector("#numero").value;
    let cod_postal = document.body.querySelector("#cod_postal").value;
    let ciudad = document.body.querySelector("#ciudad").value;
    let provincia = document.body.querySelector("#provincia").value;
    let pais = document.body.querySelector("#pais").value;
    /*     let div = document.createElement("div");
        let p = document.createElement("p"); */

    let hid_calle = document.body.querySelector("#hid-calle");
    let hid_patio = document.body.querySelector("#hid-patio");
    let hid_puerta = document.body.querySelector("#hid-puerta");
    let hid_numero = document.body.querySelector("#hid-numero");
    let hid_cp = document.body.querySelector("#hid-cp");
    let hid_ciudad = document.body.querySelector("#hid-ciudad");
    let hid_provincia = document.body.querySelector("#hid-provincia");
    let hid_pais = document.body.querySelector("#hid-pais");

    let formData = new FormData(formulario);
    //console.log([...formData.entries()]);
    let response = await fetch('/api/direccion/'+ addressId, {
        method: 'POST',
        body: formData
    });
    let result = await response.json();
    let errores = result.errors;
    //ERROR
    if (response.status !== 201) {
        for (let err of Object.entries(errores)) {
            switch (err[0]) {
                case "calle":
                    if ((calle === "") || (calle === null) || (calle.length > 10) || (calle.length < 5))
                        console.log(hid_calle);
                        hid_calle.innerHTML = "*" + err[1] + "<br>";
                    break;
                // case "patio":
                //     if ((patio === "") || (!Number.isInteger(patio)) || (patio.length < 0) || (patio.length > 100))
                //         hid_patio.innerHTML = "*" + err[1] + "<br>";
                //     break;
                // case "puerta":
                //     if ((puerta === "") || (!Number.isInteger(puerta)) || (puerta.length < 0) || (puerta.length > 100))
                //         hid_puerta.innerHTML = "*" + err[1] + "<br>";
                //     break;
                case "numero":
                    if ((numero === "") || (!Number.isInteger(numero)) || (numero.length < 0) || (numero.length > 100))
                        hid_numero.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "cod_postal":
                    if ((cod_postal === "") || (!Number.isInteger(cod_postal)) || (cod_postal.length < 0) || (cod_postal.length > 50000))
                        hid_cp.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "ciudad":
                    if ((ciudad === "") || (ciudad.length > 10) || (ciudad.length < 5))
                        hid_ciudad.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "provincia":
                    if ((provincia === "") || (provincia.length > 20) || (provincia.length < 5))
                        hid_provincia.innerHTML = "*" + err[1] + "<br>";
                    break;
                case "pais":
                    if ((pais === "") || (pais.length > 10) || (pais.length < 5))
                        hid_pais.innerHTML = "*" + err[1] + "<br>";

                    break;
            }
            setTimeout(displayError, 3000);
            /* if ((calle === "") && (err[0] === "calle")){
                hid_calle.textContent = "*"+err[1];
            }
            if ((patio === "") && (err[0] === "patio")){
                hid_patio.textContent = "*"+err[1];
            }
            if ((puerta === "") && (err[0] === "puerta")){
                hid_puerta.textContent = "*"+err[1];
            }
            if ((numero === "") && (err[0] === "puerta")){
                hid_numero.textContent = "*"+err[1];
            }
            if ((cod_postal === "") && (err[0] === "cod_postal")){
                hid_cp.textContent = "*"+err[1];
            }
            if ((ciudad === "") && (err[0] === "ciudad")){
                hid_ciudad.textContent = "*"+err[1];
            }
            if ((provincia === "") && (err[0] === "provincia")){
                hid_provincia.textContent = "*"+err[1];
            }
            if ((pais === "") && (err[0] === "pais")){
                hid_pais.textContent = "*"+err[1];
            } */

        }


        /* div.style.backgroundColor = "blue";
        div.style.height = "20%";
        div.style.width = "20%";
        div.style.display = "flex";
        div.style.fontSize = "12px";
        div.style.columnGap = "1rem";

        for (let err of Object.entries(errores)) {
            /* error.innerHTML += "<p>"+"*"+err[1]+"</p>";
            p = document.createElement("p");
            p.textContent += "*"+err[1];
            p.style.display="inline-block";
            div.append(p);
            document.body.append(div);
            remove = setTimeout(rld, 3000);
        } */
    }


    /* function rld(){
        div.remove();
    } */

    function displayError() {
        let p = formulario.querySelectorAll("p");
        for (let node of p) {
            node.textContent = "";
        }

    }

    //RESPUESTA CORRECTA
    if (response.status === 201) {
        alert("La dirección: " + result.Direccion + " ha sido editada con éxito");
        window.location.href = "/direccion";
    }


}

