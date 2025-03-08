

// MOSTRAR LOS DATOS EN LA TABLA DE NOTICIAS

function mostrarUltimasNoticias(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/ultimasNoticias.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajAultNoticias = document.getElementById("cajAultNoticias");
        cajAultNoticias.innerHTML='';

        respuesta.forEach(ultNoticia => {
            cajAultNoticias.innerHTML +=`

            <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./usuarios/adminSistem/fotos/imgNoticias/${ultNoticia.foto}" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                        <a href="">
                        <p class="mt-0 px-2">
                          ${ultNoticia.titulo} <br>
                          <small class="fecha">${ultNoticia.fecha_evento}</small> <hr>
                        </p>
                        </a>
                        
                      </div>
            </div>
            `;
        });
    });
    objRequest.send();
}
mostrarUltimasNoticias();