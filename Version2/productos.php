

<link rel="stylesheet" href="./css/heade.css">

<!-- HEADER -->
<nav class="navbar navbar-expand-lg head " id="header">
        <div class="container-fluid px-5 py-3">
            <label class="nomEmp"> BOKUY MANGUE</label>
          
            <!-- <img class="rounded-pill ms-5" style="width:60px" src="./img/logo.png" alt=""> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                      <i class="fa-solid fa-cart-shopping fs-25"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                      9
                    <span class="visually-hidden">unread messages</span>
                    </span>
              </a>

            </div>   
        </div>
    </nav>



<link rel="stylesheet" href="./css/productos.css">

<!-- BANNER -->
<div class="container-fluid px-5 mb-5 banner" id="noticia">
      <div class="container">
        <p class="h1 py-5 text-light">Productos</p>
      </div>
</div>




<!--CAJA DE PRODUCTOS -->
<div class="container py-5 w-75 d-flex productos">
     <!-- Caja de cada producto -->
    <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>

      <!-- Caja de cada producto -->
    <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
     <!-- Caja de cada producto -->
     <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
     <!-- Caja de cada producto -->
     <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
     <!-- Caja de cada producto -->
    <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
     <!-- Caja de cada producto -->
     <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="bg-warning d-flex acciones">
          <p>Berengena</p>
          <p>200 XFA</p>
          <button class="btn btn-success"> <i class="fa-solid fa-plus"></i> </button>
        </div>
      </div>
    </div>
</div>


<!-- FOOTER -->
<p class="ms-5 h1 my-5 text-center mt-5">Contactos</p>
    <div class="container-fluid d-flex">

        <?php
          require "../Version2/footer.php";
        ?>
          
          <!-- Flecha para volver al inicio -->
          <div class="container w-25 text-end flecha">
            <a href="../Version2/productos.php#header" class="btn btn-success mt-2">
            <i class="fa-solid fa-angle-up py-2"></i>
            </a>
          </div>
    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>