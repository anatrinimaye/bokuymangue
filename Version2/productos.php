
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
        <div class="col-3"><button type="button" class="active" onclick="totalProductos()" > Todos los productos</button>  </div>
        <div class="col-3"><button type="button" onclick="Citricos()"> Citricos</button></div>
        <div class="col-2"><button type="button" onclick="Pomaceas()"> Pomaceas</button></div>
        <div class="col-2"><button type="button" onclick="Tropicales()"> Tropicales</button></div>
        <div class="col-2"><button type="button" onclick="deHuseo()"> De hueso o dupa</button></div>
      </div>


<!--CAJA DE PRODUCTOS -->
<div class="container py-5 d-flex productos " id="cajaProductos">

     <!-- Caja de cada producto -->
     <!-- <div class="card producto" style="width: 14rem; ">
        <img src="./img/naranja.jpg" style="height: 190px" class="card-img-top" alt="...">
          
        <div class="card-body">
          
          <div class="d-flex nombreYprecio">
            <p class="nomb">Berengena</p>
            <p class="prec">200 XFA</p>
          </div>
          
          <div class="d-flex btnYtipo">
            <p class=""> Citrico </p>
            <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
              <i class="fa-solid fa-plus"></i> 
            </button>
          </div>
        </div>
    </div> -->


</div>



</div>

<div>
  <?php
    require("./footer.php")
  ?>
</div>

   


      

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/productos.js"></script>
  
</body>
</html>




