let enviarBtn = document.body.querySelector("#enviar");
enviarBtn.onclick = removeLocalStorage;

function removeLocalStorage(){
    localStorage.removeItem("cantidad");
}
