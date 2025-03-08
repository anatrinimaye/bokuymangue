

// MOSTRAR LOS DATOS EN LA TABLA DE NOTICIAS

function mostrarNoticias(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/noticias.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaNoticias = document.getElementById("cajaNoticias");
        cajaNoticias.innerHTML='';

        respuesta.forEach(noticia => {
            cajaNoticias.innerHTML +=`

            <div class="noticia mb-3">
                    <!-- foto de la noticia -->
                    <p class="text-center py-2">${noticia.titulo}</p>
                  <div class="fotoNoticia">
                    <img src="./usuarios/adminSistem/fotos/imgNoticias/${noticia.foto}" class=""> 
                  </div>
                  <!-- Ver mas -->
                  <p class="d-inline-flex gap-2">
                    <a class="btn btn-primary align-item-center mt-2 ms-5" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Ver Mas <i class="fa-solid fa-angle-down"></i> 
                    </a>
                  </p>
                  <!-- Texto que apaerce despues del ver mas -->
                  <div class="collapse tarjRespuesta" id="collapseExample1">
                    <div class="card card-body w-100 mb-5 px-5">
                    <p>${noticia.descripcion}</p>
                    </div>
                  </div>
                </div>
            `;
        });
    });
    objRequest.send();
}
mostrarNoticias();




