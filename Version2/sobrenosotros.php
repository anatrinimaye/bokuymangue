

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nosotros</title>
  <link rel="stylesheet" href="./css/sobrenosotros.css">
</head>
<body>

<!-- Contactos antes del header -->
  <div>
    <?php
          require ("./contact.php");
      ?>
    </div>
  <div>
    <?php
      require "../Version2/header.php";
      ?>
  </div>
   

   


        <!-- ************************ CUERPO -->
        <!-- BANNER -->
        <div class="container-fluid px-5 banner">
              <div class="container">
                <p class="h1 py-5 text-light text-center">Sobre Nosotros</p>
              </div>
        </div>

<!-- NUESTRA HISTORIA -->
     
<div class="container-fluid mt-5">
          <!--CAJA DEL TEXTO -->
      <div class="container d-flex col-lg-11 col-12 sobreNos">
          <div class="col-12 col-lg-6 d-flex flex-column align-items-center texto  mb-3">
              <p class="h1 ps-4 text-center pb-3 titulo">Nuestra Historia</p>
              <p class="col-12 col-lg-12 ">
                  La Agropecuaria BOKUY MANGUE es una empresa familiar formada por los
                  hermanos Bokuy Mangue cuyo objetivo es la distribución de bienes y
                  servicios de productos agrícolas en todo el ámbito nacional. Con
                  esta plataforma le ofrecemos la oportunidad de poder contemplar
                  nuestros productos de alta calidad también le damos la posibilidad
                  de poder hacer sus pedidos garantizándole seguridad y eficiencia en
                  sus pedidos.
                  La Agropecuaria BOKUY MANGUE es una empresa familiar formada por los
                  hermanos Bokuy Mangue cuyo objetivo es la distribución de bienes y
                  servicios de productos agrícolas en todo el ámbito nacional. Con
                  esta plataforma le ofrecemos la oportunidad de poder contemplar
                  nuestros productos de alta calidad también le damos la posibilidad
                  de poder hacer sus pedidos garantizándole seguridad y eficiencia en
                  sus pedidos.
                </p>
          </div>
           <!--CAJA DE LA IMAGEN -->
          <div class=" foto col-lg-5 col-12 ">
            <img class="w-100" src="./img/bm0.jpg" alt="">
          </div>
      </div>
    </div> 
</div>


<!-- NUESTRA VISION -->
<div class="container-fluid mt-5">
         
          <!--CAJA DEL TEXTO -->
        <div class="container w-75 d-flex col-10 vision">
          <!--CAJA DE LA IMAGEN -->
         <div class="foto py-5">
            <img class="w-100 " src="./img/vis1.webp" alt="">
          </div>
          <div class="container-fluid d-flex flex-column align-items-center texto col-12">
              <p class="h1 ps-4 text-center pb-3 titulo">Nuestra Vision</p>
              <p class="col-9 col-lg-12 px-3">
                  La Agropecuaria BOKUY MANGUE es una empresa familiar formada por los
                  hermanos Bokuy Mangue cuyo objetivo es la distribución de bienes y
                  servicios de productos agrícolas en todo el ámbito nacional. Con
                  esta plataforma le ofrecemos la oportunidad de poder contemplar
                  nuestros productos de alta calidad también le damos la posibilidad
                  de poder hacer sus pedidos garantizándole seguridad y eficiencia en
                  sus pedidos.
                  
                </p>
              
          </div>
          
      </div>
    </div> 
</div>

<!-- QUIENES SOMOS -->
<p class="h1 text-center mt-5">Quienes Somos</p>

<div class="container w-75 d-flex Qsomos mt-5 py-3">
  <div class="somos px-4 pt-3 mt-2 px-2 align-center">
    <img class="" src="./img/ana.png" alt="" />
    <p class="px-2 text-center pt-2"> ANASTASIA TRINIDAD MAYE BOKUY MANGUE</p>
  </div>
  <div class="somos px-4 pt-3 mt-2">
    <img class="" src="./img/vero.jpg" alt="" />
    <p class="px-2 text-center pt-2"> VERONICA ANDEME BOKUY MANGUE</p> 
  </div>
  <div class="somos px-4 pt-3 mt-2">
    <img class="" src="./img/mari.jpg" alt="" />
    <p class="px-2 text-center pt-2"> MARILUZ MOFUMAN BOKUY MANGUE</p>
  </div>

  <div class="somos px-4 pt-3 mt-2 px-2">
    <img class="" src="./img/jose.jpg" alt="" />
    <p class="px-2 text-center pt-2"> JOSE ANGEL NGOMO BOKUY MANGUE</p>
  </div>
  <div class="somos px-4 pt-3 mt-2">
    <img class="" src="./img/rosa.jpg" alt="" />
    <p class="px-2 text-center pt-2"> ROSA MARIA ADA BOKUY MANGUE</p>
  </div>
  <div class="somos px-4 pt-3 mt-2">
    <img class="" src="./img/matu.jpg" alt="" />
    <p class="px-2 text-center pt-2"> ESTRELLA MATUTINA OKOMO BOKUY MANGUE</p>
  </div>
</div>


 <!-- FOOTER -->
 <p class="ms-5 h1 my-5 text-center ">Contactos</p>
    <div class="container-fluid foot">
      <?php
      require "./footer.php";
      ?>
      
    </div>


    <script src="./js/bootstrap.min.js"></script>
  
</body>
</html>


