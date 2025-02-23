
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noticias</title>
  <link rel="stylesheet" href="./css/noticias.css">
</head>
<body>
  <!-- Contactos antes del header -->
  <div>
    <?php
          require ("./contact.php");
      ?>
    </div>
    <!-- HEADER -->
  <div>
    <?php
      require "../Version2/header.php";
      ?>
  </div>

      <!-- BANNER -->
      <div class="container-fluid px-5 mb-5 banner" id="noticia">
            <div class="container">
              <p class="h1 py-5 text-light text-center">Noticias</p>
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
                    <p class="text-center py-2">Nuevo Contrato con la empresa EGTC</p>
                  <div class="fotoNoticia">
                    <img src="./img/bm2.jpg" class=""> 
                  </div>
                  <!-- Ver mas -->
                  <p class="d-inline-flex gap-2">
                    <a class="btn btn-primary align-item-center mt-2 ms-5" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Ver Mas <i class="fa-solid fa-angle-down"></i> 
                    </a>
                  </p>
                  <!-- Texto que apaerce despues del ver mas -->
                  <div class="collapse tarjRespuesta" id="collapseExample2">
                    <div class="card card-body w-100 mb-5">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                  </div>
                </div>

                <!-- Caja de cada noticia -->
                <div class="noticia mb-3">
                    <!-- foto de la noticia -->
                    <p class="text-center py-2">Nuevo Contrato con la empresa EGTC</p>
                  <div class="fotoNoticia">
                    <img src="./img/bm1.jpg" class=""> 
                  </div>
                  <!-- Ver mas -->
                  <p class="d-inline-flex gap-2">
                    <a class="btn btn-primary align-item-center mt-3 ms-5" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Ver Mas <i class="fa-solid fa-angle-down"></i> 
                    </a>
                  </p>
                  <!-- Texto que apaerce despues del ver mas -->
                  <div class="collapse tarjRespuesta" id="collapseExample3">
                    <div class="card card-body w-100 mb-5">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                  </div>
                </div>

                <!-- Caja de cada noticia -->
                <div class="noticia mb-3">
                    <!-- foto de la noticia -->
                    <p class="text-center py-2">Nuevo Contrato con la empresa EGTC</p>
                  <div class="fotoNoticia">
                    <img src="./img/bm3.jpg" class=""> 
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
                      Some placeholder content for the collapse component.
                      This panel is hidden by default but revealed when the 
                      user activates the relevant trigger.
                      Some placeholder content for the collapse component.
                      This panel is hidden by default but revealed when the 
                      user activates the relevant trigger.
                    </div>
                  </div>
                </div>

            </div>


            <!-- Caja del aside ultimas noticias -->
            <div class="cajAside mb-5">
                  <h4 class=" py-2 ps-3">Ultimas Noticias</h4> <hr>
                  <!-- Caja de cada aside -->
                <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm3.jpg" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                        <a href="">
                          <p class="mt-0 px-2">
                            Compra en el supermercado EGTC <br>
                            <small class="fecha">Enero 23, 2025</small>
                          </p>  
                        </a><hr>
                      </div> 
                </div>

                <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm1.jpg" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                        <a href="">
                        <p class="mt-0 px-2">
                          Compra en el supermercado EGTC <br>
                          <small class="fecha">Enero 23, 2025</small> <hr>
                        </p>
                        </a>
                        
                      </div>
                </div>
                <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm3.jpg" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                      <a href="../Version2/noticias.php #collapseExample1">
                        <p class="mt-0 px-2">
                          Compra en el supermercado EGTC <br>
                          <small class="fecha">Enero 23, 2025</small> <hr>
                        </p>
                        </a>
                      </div>
                </div>
                <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm0.jpg" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                      <a href="">
                        <p class="mt-0 px-2">
                          Compra en el supermercado EGTC <br>
                          <small class="fecha">Enero 23, 2025</small> <hr>
                        </p>
                        </a>
                      </div>
                </div>
                <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm3.jpg" class="" alt="...">
                      </div>
                      <!-- Enunciado y fecha de las ultimas noticias -->
                      <div class="enunciado">
                      <a href="">
                        <p class="mt-0 px-2">
                          Compra en el supermercado EGTC <br>
                          <small class="fecha">Enero 23, 2025</small> <hr>
                        </p>
                        </a>
                      </div>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
          <p class="ms-5 h1 my-5 text-center ">Contactos</p>
          <div class="container-fluid foot">
            <?php
            require "./footer.php";
            ?>
          </div>

  
</body>
</html>

