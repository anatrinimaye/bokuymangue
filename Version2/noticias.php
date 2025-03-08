
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
            <div class="cajaNoticias pb-5" id="cajaNoticias">

            </div>


            <!-- Caja del aside ultimas noticias -->
            <div class="cajAside mb-5" id="cajAultNoticias">
                  <h4 class=" py-2 ps-3">Ultimas Noticias</h4> <hr>
                  <!-- Caja de cada aside -->
               
                <!-- <div class="cadAside d-flex py-2">
                      <div class="foto">
                        <img src="./img/bm3.jpg" class="" alt="...">
                      </div>
                      
                      <div class="enunciado">
                      <a href="../Version2/noticias.php #collapseExample1">
                        <p class="mt-0 px-2">
                          Compra en el supermercado EGTC <br>
                          <small class="fecha">Enero 23, 2025</small> <hr>
                        </p>
                        </a>
                      </div>
                </div> -->
                
                
            </div>

        </div>

        <!-- FOOTER -->
          <p class="ms-5 h1 my-5 text-center ">Contactos</p>
          <div class="container-fluid foot">
            <?php
            require "./footer.php";
            ?>
          </div>

      <script src="./js/noticias.js"></script>
      <script src="./js/ultNoticias.js"></script>
  
</body>
</html>

