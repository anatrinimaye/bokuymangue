
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRoducto</title>
  <link rel="stylesheet" href="./css/productos.css">
  <link rel="stylesheet" href="./css/heade.css">
  <link rel="stylesheet" href="./css/css.css">

</head>
<body>
  <!-- HEADER -->
    <nav class="navbar navbar-expand-lg head " id="header">
        <div class="container-fluid px-5 py-1">
            <div>
                <img class="rounded-pill" src="../Version2/img/BMblanco.jpg" style="width:45px ">
                <label class="nomEmpresa"> BOKUY MANGUE</label>
            </div>
          
            <!-- <img class="rounded-pill ms-5" style="width:60px" src="./img/logo.png" alt=""> -->
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
           
            <div class="collapse navbar-collapse alig-item-center cajEnlaces" id="navbarSupportedContent">
                <div class="bg-ligth d-flex buscador ms-5">
                    <i class="fa-solid fa-magnifying-glass p-2" style="cursor:pointer"></i>
                    <div class=" ">
                        <input class="inpt px-2 " type="search" placeholder="Buscar producto...">
                    </div>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 alig-item-center">
                    <!-- Inicio -->
                    <li class="nav-item ps-5">
                        <a class="nav-link" aria-current="page" href="../Version2/index.php">
                           Inicio
                        </a>
                    </li>
                    <!-- Sobre Nosotros -->
                    <li class="nav-item px-4">
                        <a class="nav-link" href="../Version2/sobrenosotros.php">
                            Sobre Nosotros
                        </a>
                    </li>
                    <!-- Productos -->
                    <li class="nav-item px-4">
                        <a class="nav-link" href="../Version2/productos.php">
                           Productos
                        </a>
                    </li>
                    <!-- Bog -->
                    <li class="nav-item ps-4">
                        <a class="nav-link" href="./noticias.php">
                           Noticias
                        </a>
                    </li>
                </ul> 
                <!-- Campanilla de notificaciones -->
              <a href="../Version2/reservar.php" class="btn position-relative">
                      <i class="fa-solid fa-cart-shopping fs-5 text-light"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      23
                    <!-- <span class="visually-hidden">unread messages</span> -->
                    </span>
              </a>
            </div>   
        </div>
    </nav>




<!-- BANNER -->
<div class="container-fluid px-5 mb-5 banner" id="noticia">
      <div class="container">
        <p class="h1 py-5 text-light">Productos</p>
      </div>
</div>

<!-- Menu de las categorias -->
<div class="container w-75 text-center d-flex categori">
  <div class="col-3"><button type="button" class="active" id="">Todos los productos</button>  </div>
  <div class="col-3"><button type="button" class="" id="btnCitricos">Citricos</button></div>
  <div class="col-2"><button type="button" class="" id="btnPomaceas">Pomaceas</button></div>
  <div class="col-2"><button type="button" class="" id="btnTropicales">Tropicales</button></div>
  <div class="col-2"><button type="button" class="" id="btnDehueso">De hueso o dupa</button></div>
</div>


<!--CAJA DE PRODUCTOS -->
<div class="container py-5 d-flex productos">
    
      <!-- Caja de cada producto -->
      <div class="card producto" style="width: 14rem; ">
        <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class=" d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Reseñas y Buton de agregar al carrito -->
          <div class="d-flex btnYreseñas">
            <p>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
          </div>
        </div>
    </div>

      <!-- Caja de cada producto -->
      <div class="card producto" style="width: 14rem; ">
        <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class=" d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Reseñas y Buton de agregar al carrito -->
          <div class="d-flex btnYreseñas">
            <p>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
          </div>
        </div>
    </div>

      <!-- Caja de cada producto -->
      <div class="card producto" style="width: 14rem; ">
        <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class=" d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Reseñas y Buton de agregar al carrito -->
          <div class="d-flex btnYreseñas">
            <p>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
          </div>
        </div>
    </div>

      <!-- Caja de cada producto -->
      <div class="card producto" style="width: 14rem; ">
        <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class=" d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Reseñas y Buton de agregar al carrito -->
          <div class="d-flex btnYreseñas">
            <p>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
          </div>
        </div>
    </div>

      <!-- Caja de cada producto -->
    <div class="card producto" style="width: 14rem; ">
      <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
        <!-- Nombre geneal despues de la imagen -->
      <div class="card-body">
        <!-- Nombre y precio -->
        <div class=" d-flex nombreYprecio">
          <p class="nomb">Berengena</p>
          <p class="prec">200 XFA</p>
        </div>
        <!-- Reseñas y Buton de agregar al carrito -->
        <div class="d-flex btnYreseñas">
          <p>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </p>
          <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>

        <!-- Caja de cada producto -->
    <div class="card producto" style="width: 14rem; ">
      <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
        <!-- Nombre geneal despues de la imagen -->
      <div class="card-body">
        <!-- Nombre y precio -->
        <div class=" d-flex nombreYprecio">
          <p class="nomb">Berengena</p>
          <p class="prec">200 XFA</p>
        </div>
        <!-- Reseñas y Buton de agregar al carrito -->
        <div class="d-flex btnYreseñas">
          <p>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </p>
          <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>

         <!-- Caja de cada producto -->
    <div class="card producto" style="width: 14rem; ">
      <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
        <!-- Nombre geneal despues de la imagen -->
      <div class="card-body">
        <!-- Nombre y precio -->
        <div class=" d-flex nombreYprecio">
          <p class="nomb">Berengena</p>
          <p class="prec">200 XFA</p>
        </div>
        <!-- Reseñas y Buton de agregar al carrito -->
        <div class="d-flex btnYreseñas">
          <p>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </p>
          <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>

        <!-- Caja de cada producto -->
    <div class="card producto" style="width: 14rem; ">
      <img src="./Admin/img/cebolla.webp" style="height: 240px" class="card-img-top" alt="...">
        <!-- Nombre geneal despues de la imagen -->
      <div class="card-body">
        <!-- Nombre y precio -->
        <div class=" d-flex nombreYprecio">
          <p class="nomb">Berengena</p>
          <p class="prec">200 XFA</p>
        </div>
        <!-- Reseñas y Buton de agregar al carrito -->
        <div class="d-flex btnYreseñas">
          <p>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </p>
          <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
</div>


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




