
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRoducto</title>
  <link rel="stylesheet" href="./css/productos.css">
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
        require ("./headerProduct.php");
    ?>
  </div>









    <!-- BANNER -->
    <div class="container-fluid px-5 mb-5 banner" id="producto">
          <div class="container">
            <p class="h1 py-5 text-light text-center">Productos</p>
          </div>
    </div>

      <!-- Menu de las categorias -->
      <div class="container w-75 text-center d-flex categori ">
        <div class="col-3"><button type="button" class="active" id="">Todos los productos</button>  </div>
        <div class="col-3"><button type="button" class="" id="btnCitricos">Citricos</button></div>
        <div class="col-2"><button type="button" class="" id="btnPomaceas">Pomaceas</button></div>
        <div class="col-2"><button type="button" class="" id="btnTropicales">Tropicales</button></div>
        <div class="col-2"><button type="button" class="" id="btnDehueso">De hueso o dupa</button></div>
      </div>


<!--CAJA DE PRODUCTOS -->
<div class="container py-5 d-flex productos ">
    
      <!-- Caja de cada producto -->
      <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>

     <!-- Caja de cada producto -->
     <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>

     <!-- Caja de cada producto -->
     <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>

     <!-- Caja de cada producto -->
     <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio ">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>

     <!-- Caja de cada producto -->
     <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>

     <!-- Caja de cada producto -->
     <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          <!-- Nombre geneal despues de la imagen -->
        <div class="card-body">
          <!-- Nombre y precio -->
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          <!-- Tipo de producto y Buton de agregar al carrito -->
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div>


</div>


<div>
  <?php
    require("./footer.php")
  ?>
</div>

   


      

    <script src="./js/bootstrap.min.js"></script>
  
</body>
</html>




