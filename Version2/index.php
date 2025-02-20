
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
    <?php
        require ("./contact.php");
    ?>
    <!-- Header -->
     <?php
            require("./header.php");
        ?>
    <!--CAJA DEL BANNER -->
    <div class=" bann mt-2 mb-5 md-px-0">
      <!-- Banner -->
      <div class="container">
        <div class="py-5 text-center eslo md-px-0">
          <h3 class="pt-5">BIENVENIDO A LA</h3>
          <h1>FRUCTÍCOLA BOKUY MANGUE</h1>
        </div>
        <div class="container mt-5 mb-5 d-flex eslogan">
            <p class="px-5 md-fs-3 md-px-0">
              SÉ COMO UNA FRUTA: <br/> 
              <span>BELLA POR FUERA SALUDABLE POR DENTRO</span>
            </p>
      </div>
      
    </div>
     <!-- SOBRE NOSOTROS -->
     
      
    <div class="container-fluid cajaNosotros">
      <p class="text-center titulo pt-4 d-md-flex-column pb-3"> Sobre Nosotros</p>
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
          <div class="col-lg-5 col-12 foto">
            <img class="" src="./img/bm0.jpg" alt="">
          </div>
      </div>
    </div>
    

    <!--CAJA DE LAS CATEGORIAS DE LOS PRODUCTOS -->
    <p class="text-center my-5 titulo">Categorias de Productos</p>
   
    
    <div class="container-fluid categorias px-5 py-2">
      <!-- Caja general de las cartegoria-->
      <div class="container categoria d-flex ">

        <div class="card" style="width: 14rem;">
          <img src="./img/melocoton.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">De hueso o Drupa</h5>
            <p class="card-text">
              Frutas que tienen una semilla grande (hueso)
            </p>
            <a class="btn form-control md-col-4 leer" href="./productos.php">
              Ver Productos <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="card" style="width: 15rem;">
        <img src="./img/naranja.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Citrico</h5>
          <p class="card-text">
              Frutas que tienen un sabor agrio o agridulce
          </p>
          <a class="btn form-control md-col-4 leer" href="./productos.php">
            Ver Productos <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>

        <div class="card" style="width: 15rem;">
        <img src="./img/melocoton.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Tropicales</h5>
          <p class="card-text">
          Frutas que crecen en lugares tropicales con un sabor dulce
          </p>
          <a class="btn form-control md-col-4 mt-2 leer" href="./productos.php">
            Ver Productos <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>

        <div class="card" style="width: 15rem;">
        <img src="./img/manzana.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Pomacea</h5>
          <p class="card-text">
          Son frutas que tienen una semilla pequeña
          </p>
          <a class=" btn form-control md-col-4 leer" href="./productos.php">
              Ver Productos <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        </div>
      </div>

      

    </div>

    <!-- GALERIA -->
    <p class="text-center my-5 titulo">Nuestra Galeria</p>
    <!-- Caja de la Productos Mas Comprados -->
    <div class="container-fluid px-5 prodComprados">
        <div class="container d-flex comprados d-flex">
            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon1.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>
            
            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon4.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>

            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon2.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>

            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon3.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>
            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon1.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>
            
            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon4.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>

            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon2.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>

            <div class="card producto" style="width: 16rem; ">
              <img src="./img/fon3.jpg" style="height: 240px" class="card-img-top" alt="...">
            </div>
        </div>

        
    </div>



    <!-- NOTICIAS -->
    <p class="text-center my-5 titulo">Ultimas Noticias</p>
    <a href="./noticias.php">
      <div class="container noticias">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner noticia">
                <div class="carousel-item active carosel">
                  <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
                  <img src="./img/bm1.jpg" class="d-block w-100" alt="...">
                
                  
                </div>
                <div class="carousel-item carosel">
                <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
                  <img src="./img/bm2.jpg" class="d-block w-100" alt="...">
                  
                  
                </div>
                <div class="carousel-item carosel">
                  <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
                  <img src="./img/bm3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <!-- Botones del carrousel -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>
    </a>
        
    
    
    <!-- FOOTER -->
    <p class="ms-5 h1 my-5 text-center ">Contactos</p>
    <div class="container-fluid d-flex foot">
      <?php
      require "./footer.php";
      ?>
      <!-- Flecha para volver al inicio -->
      <div class="container w-25 text-end flecha">
        <a href="../Version2/index.php #header" class="btn btn-primary mt-3">
        <i class="fa-solid fa-angle-up py-2"></i>
        </a>
      </div>
    </div>
    
    <script src="./js/bootstrap.min.js"></script>
   
  
</body>
</html>





   
  


