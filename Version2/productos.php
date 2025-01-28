
<?php
    require "./header.php";
?>
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
    <div class="card bg-secondary producto" style="width: 15rem; height: 240px">
      <img src="./Admin/img/berengena.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class=" d-flex acciones pt-2 px-1">

        <p>berengena</p>
        <p>300XFA</p>
        <p><a href="#" class="btn btn-success"> <i class="fa-solid fa-plus"></i></a></p>
        <!-- <div>
            berengena
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class=""> <i class="btn btn-primary fa-solid fa-circle-plus"></i></a>
        </div> -->
      </div>
      </div>
    </div>
        <!-- Caja de cada producto -->
        <div class="card bg-secondary producto" style="width: 15rem; height: 240px">
      <img src="./Admin/img/melocoton.webp" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="container bg-warning d-flex acciones">
        <div>
            melocoton
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class="btn btn-success"> <i class="fa-solid fa-plus"></i></a>
        </div>
      </div>
      </div>
    </div>
        <!-- Caja de cada producto -->
        <div class="card bg-secondary producto" style="width: 15rem; height: 240px">
      <img src="./Admin/img/fresa.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="container bg-warning d-flex acciones py-2">
        <div>
            Fresa
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class=""> <i class="btn btn-primary fa-solid fa-circle-plus"></i></a>
        </div>
      </div>
      </div>
    </div>
        <!-- Caja de cada producto -->
        <div class="card bg-secondary producto" style="width: 16rem; height: 240px">
      <img src="./Admin/img/coco.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="container bg-warning d-flex acciones">
        <div>
            Fresa
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class=""> <i class="btn btn-primary fa-solid fa-circle-plus"></i></a>
        </div>
      </div>
      </div>
    </div>

        <!-- Caja de cada producto -->
        <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/aguacate.jpg" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="container bg-warning d-flex acciones">
        <div>
            Fresa
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class=""> <i class="btn btn-primary fa-solid fa-circle-plus"></i></a>
        </div>
      </div>
      </div>
    </div>

        <!-- Caja de cada producto -->
        <div class="card bg-secondary producto" style="width: 14rem; height: 240px">
      <img src="./Admin/img/banana.webp" style="height: 170px" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="container bg-warning d-flex acciones">
        <div>
            Fresa
          </div>
          <div>
            200 XFA
          </div>
          <div>
            <a href="#" class=""> <i class="btn btn-primary fa-solid fa-circle-plus"></i></a>
        </div>
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