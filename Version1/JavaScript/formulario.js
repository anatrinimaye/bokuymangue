let formulario= document.getElementById("formul");
let inputs= document.querySelectorAll("#formul .campos input");
let span= document.querySelectorAll("#formul .campos span");
let nombre= document.getElementById("nombre");
let telefono= document.getElementById("telefono");
var email= document.getElementById("correo");
const validacion = {
    nombre: /^[a-zA-Z\s]+$/,
    telefono: /^[0-9-\s]+$/,
    correo: /[a-z0-9.-_]+@[a-z.-_]+\.[a-z]+/

}
function validar(valido, caja, comentar) {
    if(valido.test(caja.value)  ) {
        document.getElementById(comentar).classList.remove("incorrecto");
        document.getElementById(comentar).classList.add("correcto");
        document.getElementById(`span__${comentar}`).classList.remove("fallo");
        document.getElementById(`span__${comentar}`).classList.add("good");
    }
    
    else{
        document.getElementById(comentar).classList.add("incorrecto");
        document.getElementById(`span__${comentar}`).classList.remove("good");
        document.getElementById(`span__${comentar}`).classList.add("fallo");
    }
}

function comprobar(x){
    switch(x.target.name){
        case "nombre":

            validar(validacion.nombre, x.target, x.target.id); break;
            
        case "telefono":
            validar(validacion.telefono, x.target, x.target.id); break;
        case "correo":
            validar(validacion.correo, x.target, x.target.id); break;
        
        default: break;

    } (x.target.name);

}
inputs.forEach(function(y){
    y.addEventListener("keyup", comprobar);
    y.addEventListener("blur", comprobar);

});
formulario.addEventListener("submit", function(event) {
    event.preventDefault();
    

});
