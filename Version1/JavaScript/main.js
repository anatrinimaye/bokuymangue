document.getElementById("menu").addEventListener("click", burger);

function burger(){
    let menuBurger= document.querySelector("#nav")
    if(!menuBurger.classList.contains("activo")){
        menuBurger.classList.add("activo");

    } else{
        menuBurger.classList.remove("activo");
    }
}


//Formulario del login para el administrador



function pasar(){
    let nombre = document.getElementById("nombre").value;
    let contraseña = document.getElementById("contraseña").value;
    let formulario=document.getElementById("formul");

    if((nombre == null || nombre.length==0) || (contraseña == null || contraseña.length == 0)){
        alert("NO PUEDE DEJAR NINGUN CAMPO");
    }
    else if(nombre === "ana trini" && contraseña==="anatrini23"){
        window.location="confirReserva.html"
    }
    else{
        alert("DATOS INCORRECTOS")
    }
     
    
}

