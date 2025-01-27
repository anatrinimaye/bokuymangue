<?php
    require "./header.php";
?>
<link rel="stylesheet" href="./css/noticias.css">


<!-- BANNER -->
<div class="container-fluid px-5 mb-5 banner" id="noticia">
      <div class="container">
        <p class="h1 py-5 text-light">NOTICIAS</p>
      </div>
</div>

<!-- NOTICIAS -->

  <!-- Caja general de las todas las Noticias -->
  <div class="container noticias">
      <!-- Caja genereal de las noticias -->
      <div class="cajaNoticias pb-5">
          <!-- Caja de cada noticia -->
          <div class="noticia mb-3">
              <!-- foto de la noticia -->
              <p class="text-center py-2">Nuevo Contratoto con la empresa EGTC</p>
            <div class="fotoNoticia">
              <img src="./img/fond2.jpg" class=""> 
            </div>
            <!-- Ver mas -->
            <p class="d-inline-flex gap-2">
              <a class="btn btn-primary align-item-center mt-2 ms-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Ver Mas <i class="fa-solid fa-angle-down"></i> 
              </a>
            </p>
            <!-- Texto que apaerce despues del ver mas -->
            <div class="collapse" id="collapseExample">
              <div class="card card-body w-100 mb-5">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
              </div>
            </div>
          </div>

          <!-- Caja de cada noticia -->
          <div class="noticia mb-3">
              <!-- foto de la noticia -->
              <p class="text-center py-2">Nuevo Contratoto con la empresa EGTC</p>
            <div class="fotoNoticia">
              <img src="./img/fond1.jpg" class=""> 
            </div>
            <!-- Ver mas -->
            <p class="d-inline-flex gap-2">
              <a class="btn btn-primary align-item-center mt-2 ms-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Ver Mas <i class="fa-solid fa-angle-down"></i> 
              </a>
            </p>
            <!-- Texto que apaerce despues del ver mas -->
            <div class="collapse" id="collapseExample">
              <div class="card card-body w-100 mb-5">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
              </div>
            </div>
          </div>



      </div>


      <!-- Caja del aside ultimas noticias -->
      <div class="cajAside ">
            <h4 class=" py-2 ps-3">Ultimas Noticias</h4>
            <!-- Caja de cada aside -->
          <div class="cadAside d-flex py-2">
                <div class="foto">
                  <img src="./img/cesta.png" class="" alt="...">
                </div>
                <!-- Enunciado y fecha de las ultimas noticias -->
                <div class="enunciado">
                  <p class="mt-0">
                    Compra en el supermercado EGTC <br>
                    <span>Enero 23, 2025</span>
                  </p>
                </div>
          </div>
          <div class="cadAside d-flex py-2">
                <div class="foto">
                  <img src="./img/cesta.png" class="" alt="...">
                </div>
                <!-- Enunciado y fecha de las ultimas noticias -->
                <div class="enunciado">
                  <p class="mt-0 px-2">
                    Compra en el supermercado EGTC <br>
                    <span>Enero 23, 2025</span>
                  </p>
                </div>
          </div>
          <div class="cadAside d-flex py-2">
                <div class="foto">
                  <img src="./img/cesta.png" class="py-2" alt="...">
                </div>
                <!-- Enunciado y fecha de las ultimas noticias -->
                <div class="enunciado">
                  <p class="mt-0 px-2">
                    Compra en el supermercado EGTC <br>
                    <span>Enero 23, 2025</span>
                  </p>
                </div>
          </div>
      </div>

  </div>



<!-- FOOTER -->
<!-- <p class="ms-5 h1 my-5 text-center mt-5">Contactos</p>
    <div class="container-fluid d-flex">
      -->
      <!-- Flecha para volver al inicio -->
      <!-- <div class="container w-25 text-end flecha">
        <a href="../Version2/noticias.php #noticia" class="btn btn-success mt-2">
        <i class="fa-solid fa-angle-up py-2"></i>
        </a>
      </div>
    </div> -->