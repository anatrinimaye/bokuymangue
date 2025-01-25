
<?php 
require "./header.php"; 
?>

<link rel="stylesheet" href="./css/inicio.css">

    <!-- BANNER -->
    <div class="container-fluid banner px-5 mb-5">
      <div class="container">
        <div class="py-5 text-center eslo">
          <h3 class="pt-5">BIENVENIDO A LA</h3>
          <h1>FRUCTÍCOLA BOKUY MANGUE</h1>
        </div>
        <div class="container mt-5 mb-5 d-flex eslogan">
            <p class="px-5" >
              SÉ COMO UNA FRUTA: <br/> 
              <span>BELLA POR FUERA SALUDABLE POR DENTRO</span>
            </p>
      </div>
    </div>

    <!-- SOBRE NOSOTROS -->
     <div class="container-fluit">
      <div class="container py-5 d-flex sobreNos">
          <!-- TITULO -->
          <div class="container texto">
              <p class="h1 ps-4 pt-1">Sobre Nosotros</p>
              <p class="pt-4 px-3 mb-5">
                  La Agropecuaria BOKUY MANGUE es una empresa familiar formada por los
                  hermanos Bokuy Mangue cuyo objetivo es la distribución de bienes y
                  servicios de productos agrícolas en todo el ámbito nacional. Con
                  esta plataforma le ofrecemos la oportunidad de poder contemplar
                  nuestros productos de alta calidad también le damos la posibilidad
                  de poder hacer sus pedidos garantizándole seguridad y eficiencia en
                  sus pedidos.
                </p>
                <a class="mt-5 p-1 ms-2" href="">Leer Mas <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="container foto">
            <img class="w-100" src="./img/logo.png" alt="">
          </div>
      </div>
    </div>

    <!--CAJA DE LAS CATEGORIAS DE LOS PRODUCTOS -->
    <p class="container h1 my-5 ">Categorias de Productos</p>
    <div class="container-fluid categorias d-flex px-5 py-2">

      <div class="card" style="width: 18rem;">
      <img src="./Admin/img/melocoton.webp" style="height: 200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">De hueso o Drupa</h5>
        <p class="card-text">
        Son frutas que tienen una semilla grande(hueso) en su interior
        </p>
        <a class="form-control btn btn-primary mt-2 p-1" href="">Ver Productos</i></a>    
      </div>
      </div>

      <div class="card" style="width: 18rem;">
      <img src="./Admin/img/naranja.jpg" style="height: 200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Citrico</h5>
        <p class="card-text">
        Son Frutas que tienen un sabor agrio o agridulce
        </p>
        <a class="form-control btn btn-primary mt-2 p-1" href="">Ver Productos</i></a>    
      </div>
      </div>

      <div class="card" style="width: 18rem;">
      <img src="./Admin/img/mango.webp" style="height: 200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Tropicales</h5>
        <p class="card-text">
        Son frutas que crecen en lugares tropicales con un sabor dulce
        </p>
        <a class="form-control btn btn-primary mt-2 p-1" href="">Ver Productos</i></a>    
      </div>
      </div>

      <div class="card" style="width: 18rem;">
      <img src="./Admin/img/manzana.webp" style="height: 200px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Pomacea</h5>
        <p class="card-text">
        Son frutas que tienen una semilla pequeña(pepitas) en su interior
        </p>
        <a class="form-control btn btn-primary mt-2 p-1" href="">Ver Productos</i></a>    
      </div>
      </div>

    </div>

    <!-- NOTICIAS -->
    <p class="container h1 ps-5 my-5">Noticias</p>
    <a href="./noticias.php">
    <div class="container  noticias">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner noticia">
    <div class="carousel-item active">
    <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
      <img src="./img/fond1.jpg" class="d-block w-100" alt="...">
     
      
    </div>
    <div class="carousel-item">
    <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
      <img src="./img/fond2.jpg" class="d-block w-100" alt="...">
      
      
    </div>
    <div class="carousel-item">
      <p class="h5 text-center">Nuevo contrato con la empresa EGTC</p>
      <img src="./img/fond3.jpg" class="d-block w-100" alt="...">
      
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</a>
        
    
    
    <!-- FOOTER -->
    <p class="ms-5 h1 my-5 text-center ">Contactos</p>
    <div class="container-fluid ">
      <?php
      require "./footer.php";
      ?>
    </div>
   

   
  


<script src="./js/bootstrap.bundle.min.js"></script>
   