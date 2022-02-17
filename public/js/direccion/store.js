//codigo JS la API de crear direccion.

let envioBtn = document.body.querySelector("#enviar");

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

    let hid_calle = document.body.querySelector("#hid-calle");
    let hid_patio = document.body.querySelector("#hid-patio");
    let hid_puerta = document.body.querySelector("#hid-puerta");
    let hid_numero = document.body.querySelector("#hid-numero");
    let hid_cp = document.body.querySelector("#hid-cp");
    let hid_ciudad = document.body.querySelector("#hid-ciudad");
    let hid_provincia = document.body.querySelector("#hid-provincia");
    let hid_pais = document.body.querySelector("#hid-pais");

    function errorValidation(){

        let cont = false;
        if ((calle === "") || (calle === null) || (calle.length < 4) || (calle.length > 50)){
            hid_calle.innerHTML = "* The calle field is required, less than 50 and more than 5." + "<br>";
            cont = true;
        }

        if ((patio === "") && (!Number.isInteger(patio)) || (Math.sign(patio) === -1)){
            hid_patio.innerHTML = "* The patio field is optional, integer and more than 0." + "<br>";
            cont = true;
        }

        if ( (puerta === "") && (!Number.isInteger(puerta))  || (Math.sign(puerta) === -1)){
            hid_puerta.innerHTML = "* The puerta field is optional, integer and more than 0." +  "<br>";
            cont = true;
        }

        if ((numero === "") && (!Number.isInteger(numero)) || (Math.sign(numero) === -1)){
            hid_numero.innerHTML = "* The numero id field is required, integer and more than 0." + "<br>";
            cont = true;
        }
        if ((cod_postal === "") && (!Number.isInteger(cod_postal)) || (Math.sign(cod_postal) === -1) || (cod_postal.length > 50000)){
            hid_cp.innerHTML = "* The cod_postal base field is required, integer, less than 50000 and more than 0." + "<br>";
            cont = true;
        }
        if ((ciudad === "") || (ciudad.length < 3) || (ciudad.length > 50)){
            hid_ciudad.innerHTML = "* The ciudad field is required, less than 50 and more than 5." + "<br>";
            cont = true;
        }

        if ((provincia === "") || (provincia.length < 3) || (provincia.length > 50)){
            hid_provincia.innerHTML = "* The provincia field is required, less than 50 and more than 5." + "<br>";
            cont = true;
        }
        if ((pais === "") || (pais.length < 3) || (pais.length > 50)){
            hid_pais.innerHTML = "* The pais field is required, less than 50 and more than 4." + "<br>";
            cont = true;
        }

        setTimeout(displayError, 3000);
        return cont;
    }

    let comprobarErrores = errorValidation();
    if(!comprobarErrores){
        let formData = new FormData(formulario);
        //console.log([...formData.entries()]);
        let response = await fetch('/api/direccion' , {
            method: 'POST',
            body: formData
        });
        let result = await response.json();
        let errores = result.errors;
        //ERROR
        if (response.status === 400) {
            for (let err of Object.entries(errores)) {
                switch (err[0]) {
                    case "calle":
                        hid_calle.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "patio":
                        hid_patio.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "puerta":
                        hid_puerta.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "numero":
                        hid_numero.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "cod_postal":
                        hid_cp.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "ciudad":
                        hid_ciudad.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "provincia":
                        hid_provincia.innerHTML = "*" + err[1] + "<br>";
                        break;
                    case "pais":
                        hid_pais.innerHTML = "*" + err[1] + "<br>";
                        break;
                }
                setTimeout(displayError, 3000);

            }

        }

        //RESPUESTA CORRECTA
        if (response.status === 201) {
            alert("La direccion: " + result.Direccion + " ha sido creada con éxito");
            window.location.href = "/user/profile";
        }
    }


    function displayError() {
        let p = formulario.querySelectorAll("p");
        for (let node of p) {
            node.textContent = "";
        }

    }


}
