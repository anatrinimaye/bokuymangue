
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="./css/inicio.css">
</head>
<body>
     
    <!-- Contactos antes del header -->
     <div>
      <?php
          require ("./contact.php");
      ?>
     </div>
    
    <!-- Header -->
     <div>
      <?php
            require("./header.php");
        ?>
     </div>
     
    <!--CAJA DEL BANNER -->
    <div class=" bann mb-5">
      <!-- Banner -->
      <div class="container">
        <div class="text-center eslo">
          <h3 class="pt-5">BIENVENIDO A LA</h3>
          <h1>FRUCTÍCOLA BOKUY MANGUE</h1>
        </div>
        <div class="container d-flex eslogan">
            <p class="col-12 col-lg-6">
              SÉ COMO UNA FRUTA: <br/> 
              <span>BELLA POR FUERA SALUDABLE POR DENTRO</span>
            </p>
        </div>
      </div>
      
    </div>

     <!-- SOBRE NOSOTROS -->
    <div class="container-fluid cajaNosotros">
      <p class=" titulo pt-4 pb-3"> Sobre Nosotros</p>
        <div class="container d-flex sobreNos py-3">
           <!--CAJA DEL TEXTO -->
          <div class="container texto col-lg-7 col-12 px-3">
            <p class="container col-12 col-lg-12 p-3 mb-3">
                  La Agropecuaria BOKUY MANGUE es una empresa familiar formada por los
                  hermanos Bokuy Mangue cuyo objetivo es la distribución de bienes y
                  servicios de productos agrícolas en todo el ámbito nacional. Con
                  esta plataforma le ofrecemos la oportunidad de poder contemplar
                  nuestros productos de alta calidad también le damos la posibilidad
                  de poder hacer sus pedidos garantizándole seguridad y eficiencia en
                  sus pedidos.
                  No solo nos encargamos de proporcionarle productos de buena calidad
                  sino que tambien les garantizamos un buen servivicio con nosotros no
                  tendrá que volver a preocuparse por que en su mesa falte fruta.
                </p>
                <!-- Boton de leer mas sobre nosotros -->
                <a class="md-col-4 p-2 ms-3 leer" href="./sobrenosotros.php"> Leer Mas 
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
          </div>
           <!--CAJA DE LA IMAGEN -->
          <div class="col-lg-5 col-10 foto">
            <img class="" src="./img/bm0.jpg" alt="">
          </div>
      </div>
    </div>
    
      <!-- HORARIO -->
      <div class="horario d-flex container-fluid">
                <!-- Caja del Horario y de Emergencia  -->
                <div class=" d-flex horari col-12 col-lg-8 py-5 px-2">
                    <!-- Horario -->
                    <div class="col-md-12 col-lg-6 px-5 hora">
                        <div class="container">
                            <p class="h3 text-center ">Horario de apertura</p> <hr>
                        </div> 
                        <div class="container">
                            <div>
                                <p>Lunes - Viernes: &nbsp <span>7:00 - 23:00 h</span>  </p>
                                <p>Sábado - Domingo: &nbsp <span>9:00 - 18:00h</span> </p>
                                <p class="festi"> Dia/as de Cierre <hr> <span class="text-center"> 8 Diciembre</span> </p>
                            </div>
                        </div>
                    </div>
                    <!-- Emergencia -->
                    <div class="col-md-4 col-lg-5 px-5 pb-5">
                        <div class="container">
                            <p class="h3 text-center">Casos de emergencia</p> <hr>
                        </div>
                        <div class="container">
                            <div>
                                <p class="cont">
                                    <i class="fa-solid fa-phone" style="color: rgb(199, 104, 1);"></i> &nbsp
                                    <span> +240 222 546 678</span>
                                </p>
                                <span>Su plan de tratamiento está diseñado para un progreso constante, con cada fase implementada rápidamente.</span>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
    
      <!--CAJA DE LAS CATEGORIAS DE LOS PRODUCTOS -->
      <div class="container-fluid cajaCategorias">
        <p class=" my-5 titulo">Categorias de Productos</p>
        <!-- Caja general de las cartegoria-->
        <div class="container categorias d-flex">
          <!-- cada Categoria -->
            <div class="card categoria ">
              <div class="foto">
                <img src="./img/melocoton.webp" class="card-img-top" alt="...">
              </div>
              <div class="card-body texto">
                <h5 class="card-title text-center">De hueso o Drupa</h5>
                <p class="card-text">
                  Frutas que tienen una semilla grande (hueso)
                </p>
                <a class="btn form-control md-col-4" href="./productos.php">
                  Ver Productos <i class="fa-solid fa-arrow-right"></i>
                </a>
                <p class="fs-4 mt-2 conta" id="hueso">0</p>

              </div>
            </div>

            <!-- cada Categoria -->
            <div class="card categoria">
              <div class="foto">
                <img src="./img/naranja.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body texto">
                <h5 class="card-title text-center">Citrico</h5>
                <p class="card-text">
                  Frutas que tienen un sabor agrio o agridulce
                </p>
                <a class="btn form-control md-col-4" href="./productos.php">
                  Ver Productos <i class="fa-solid fa-arrow-right"></i>
                </a>
                <p class="fs-4 mt-2 conta" id="citrico">0</p>
              </div>
            </div>

            <!-- cada Categoria -->
            <div class="card categoria">
              <div class="foto">
                <img src="./img/naranja.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body texto">
                <h5 class="card-title text-center">Pomaceas</h5>
                <p class="card-text">
                  Son frutas que tienen una semilla pequeña
                </p>
                <a class="btn form-control md-col-4" href="./productos.php">
                  Ver Productos <i class="fa-solid fa-arrow-right"></i>
                </a>
                <p class="fs-4 mt-2 conta" id="pomacea">0</p>
              </div>
            </div>

            <!-- cada Categoria -->
            <div class="card categoria">
              <div class="foto">
                <img src="./img/naranja.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body texto">
                <h5 class="card-title text-center">Tropicales</h5>
                <p class="card-text">
                  Frutas que crecen en lugares tropicales con un sabor dulce
                </p>
                <a class="btn form-control md-col-4" href="./productos.php">
                  Ver Productos <i class="fa-solid fa-arrow-right"></i>
                </a>
                <p class="fs-4 mt-2 conta" id="tropicales">0</p>
              </div>
            </div>

        </div>

      </div>
   

    <!-- GALERIA -->
    <div class="cajaGaleria">
        <p class="text-center my-5 titulo">Nuestra Galeria</p>
        <div class="container d-flex galeria d-flex">
            <div class="card producto" >
              <img src="./img/fon1.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card producto" >
              <img src="./img/fon4.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card producto" >
              <img src="./img/fon2.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card producto" >
              <img src="./img/fon3.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card producto" >
              <img src="./img/fon1.jpg" class="card-img-top" alt="...">
            </div>
            
            <div class="card producto" >
              <img src="./img/fon4.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card producto" >
              <img src="./img/fon2.jpg" class="card-img-top" alt="...">
            </div>

            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon3.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>
        </div> 
    </div>

    <!-- NOTICIAS -->
    <p class="my-5 titulo">Ultimas Noticias</p>
   
    <div class="container noticias">
        <div id="carouselExample" class="carousel slide noticia" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/fon1.jpg" class="d-block w-100" alt="Imagen 1" >
              <div class="carousel-caption">
                <h5>Título de la diapositiva 1</h5>
                <p>Descripción de la diapositiva 1</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/fon2.jpg" class="d-block w-100" alt="Imagen 2">
              <div class="carousel-caption">
                <h5>Título de la diapositiva 2</h5>
                <p>Descripción de la diapositiva 2</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
      </div>
    </div>

     
    
    <!-- FOOTER -->
     <div>
        <?php
          require("./footer.php");
        ?>
     </div>
    


     <!-- ICONO DE WHATSAPP FLOTANTE -->
     <div class="btnWhtasapp">
        <a href="https://wa.me/555658064" target="_blank">
            <img class="" src="./img/whatsapp.png" alt="WhatsApp">
        </a>
    </div>
      <script>
        $('.carousel').carousel({
          interval: 2000 // Tiempo en milisegundos (3 segundos en este ejemplo)
        });
      </script>
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/contador.js"></script>
   
  
</body>
</html>





   
  


