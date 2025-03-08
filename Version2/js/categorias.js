





// MOSTRAR LOS DATOS DE LAS CATEGORIAS

function mostrarCategorias(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/categorias.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.responseText);
        console.log(respuesta);
        

        let cajaCategoria = document.getElementById("cajaCategoria");
        cajaCategoria.innerHTML='';

        respuesta.forEach(categoria => {
            cajaCategoria.innerHTML +=`

          <div class="card categoria">
              <div class="foto">
                <img src="./img/naranja.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body texto">
                <h5 class="card-title text-center">${categoria.nombre}</h5>
                <p class="card-text">
                  Son frutas que tienen una semilla pequeña
                </p>
                <a class="btn form-control md-col-4" href="./productos.php">
                  Ver Productos <i class="fa-solid fa-arrow-right"></i>
                </a>
  
              </div>
            </div> 
            `;
        });
    });
    objRequest.send();
}
mostrarCategorias();


// MOSTRAR LOS DATOS DE LA GALERIA

function mostrarGaleria(){
  let objRequest = new XMLHttpRequest();

  objRequest.open("GET","./php/galeria.php", true);
  objRequest.addEventListener("load", ()=> {
      let respuesta = JSON.parse(objRequest.responseText);
      console.log(respuesta);
      

      let cajaGaleria = document.getElementById("cajaGaleria");
      cajaGaleria.innerHTML='';

      respuesta.forEach(galeria => {
        cajaGaleria.innerHTML +=`
            <div class="card producto" >
              <img src="./usuarios/adminSistem/fotos/imgProductos/${galeria.foto}" class="card-img-top" alt="...">
            </div>
          `;
      });
  });
  objRequest.send();
}
mostrarGaleria();