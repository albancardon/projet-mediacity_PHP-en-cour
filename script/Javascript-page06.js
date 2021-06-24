var btnInscr = document.getElementById("btn-inscr");
var pass = document.getElementById("pass");
var pass1 = document.getElementById("pass1");
var btnConn = document.getElementById("btn-conn");
var checkbox = document.getElementById("checkbox");
var passConn = document.getElementById("passConn");



btnInscr.addEventListener("click", (evt)=>{
    let verfiPass = pass.value;
    let verfiPassConfirm = pass1.value;
    if (verfiPass != verfiPassConfirm) {
        alert("Mot de passe non identique!");
        evt.preventDefault();
    }});
checkbox.addEventListener("change", ajoutCompteLocalStorage);

function ajoutCompteLocalStorage() {
    if ( checkbox.checked == true){
    }
}