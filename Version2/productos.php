
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
   <!-- Contactos antes del header -->
   <?php
        require ("./contact.php");
    ?>
<!-- HEADER -->

<!-- Header -->
<div class="row header pt-2">
                <!-- enlaces -->
            <div class="col-lg-5 d-none d-lg-flex enlaces">
                <a class="nav-link" href="./index.php"> <span>Inicio</span> </a>
                <a class="nav-link" href="./sobrenosotros.php"> <span> Sobre Nosotros</span></a>
                <a class="nav-link" href="./productos.php"> <span> Productos</span></a>
                <a class="nav-link" href="./noticias.php"> <span>Noticias</span> </a>
                <a class="nav-link" href="./contactanos.php"> <span>Contáctanos</span></a>
            </div>

            <!-- Logo -->
            <div class="col-lg-2 col-md-12 d-flex logo">
                    <p class="h5"> <i class="fa-solid fa-apple-alt fs-5 pt-2"></i> <span class="text-dark">Bokuy</span> Mangue</p>
                <!-- BOTON DE LA AMBURGUESA-->
                <div class=" d-lg-none d-md-block burger ">
                    <button class="btn btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-bars fs-3"></i>
                    </button>
            
                </div>
            </div>
            
            <!-- Buscador y Boton de cambio de tema -->
            <div class="col-lg-4 d-none d-lg-flex buscYbtncambio">
                <!-- Buscador -->
                 <div class="d-flex col-lg-9 buscador">
                    <form action="d-flex " role="search">
                        <input class="mt-2 ps-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn" type="submit">
                            <i class="fa-solid fa-magnifying-glass pb-1"></i>
                        </button>
                    </form>
                 </div>
              
                <!-- Boton de cambio de tema -->
                <button class="btncamTema d-none d-lg-flex" type="button" onclick="cambiarTema()">
                    <i class="fa-solid fa-moon pt-1"></i>
                </button>

                   <!-- Campanilla de notificaciones -->
              <a href="../Version2/reservar.php" class="btn position-relative">
                      <i class="fa-solid fa-cart-shopping fs-5 text-light"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      23
                    <!-- <span class="visually-hidden">unread messages</span> -->
                    </span>
              </a>

            

            <!-- Cuerpo del offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <!-- Logo -->
                        <div class=" col-lg-3 d-flex logo">
                            <p> <i class="fa-solid fa-heart fs-3 pt-3"></i> </p>
                            <p class="h4"> <span class="text-primary">Bokuy</span> Mangue</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ">
                        <!-- enlaces -->
                        <div class=" enlaces ps-3">
                            <a class="nav-link " href="#"> <span>Inicio</span> </a>
                            <a class="nav-link mt-3" href="#"> <span> Sobre Nosotros</span></a>
                            <a class="nav-link mt-3" href="#"> <span>Páginas</span> </a>
                            <a class="nav-link mt-3 mb-2" href="#"><span>Contacto</span></a>
                            
                            
                            
                        </div>
                        <!-- Buscador y Boton de cambio de tema -->
                        <div class="col-md-3 buscYbtncambio">
                            <!-- Buscador -->
                            <form class="d-flex col-10 ps-3" role="search">
                                <button class="btn btn-success me-2" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <input class="form-control " type="search" placeholder="Buscar..." aria-label="Search">
                            </form>
                        </div>

                    
                    </div>
            </div>


    </div>






    <!-- BANNER -->
    <div class="container-fluid px-5 mb-5 banner" id="noticia">
          <div class="container">
            <p class="h1 py-5 text-light text-center">Productos</p>
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




