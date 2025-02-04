

<link rel="stylesheet" href="./css/reservar.css">

<!-- BANNER -->
<div class="container-fluid px-5 mb-5 banner" id="noticia">
<?php
require "../Version2/header.php";
?>
      <div class="container">
        <p class="h1 py-5 text-light">Reserva</p>
      </div>
</div>


<!-- CAJA GENERAL DEL CARRITO Y LOS BOTONES -->

 <div class="container carritoYformul d-flex">
 
  <!-- Carrito -->
  <div class=" carrito py-4" >
    <p class="h4 text-center pb-3">Mi carrito de compras</p>
      <div class="row cadaElemnto">
        <div class="col-3"> <img class="" src="../Version2/Admin/img/cebolla.webp" style="width: 90px" alt=""> </div>
        <div class="col-2 pt-3"> <p>Banana</p> </div>
        <div class="col-2 pt-3"> <p>200 XFA</p> </div>
        <div class="col-2 pt-3"><p>4</p> </div>
        <div class="col-2 pt-2"> <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button> </div>
      </div>

      <div class="row cadaElemnto pt-2">
        <div class="col-3"> <img class="" src="../Version2/Admin/img/cebolla.webp" style="width: 90px" alt=""> </div>
        <div class="col-2 pt-3"> <p>Banana</p> </div>
        <div class="col-2 pt-3"> <p>200 XFA</p> </div>
        <div class="col-2 pt-3"> 2</div>
        <div class="col-2 pt-2"> <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button> </div>
      </div>

      <div class="row cadaElemnto">
        <div class="col-3"> <img class="" src="../Version2/Admin/img/cebolla.webp" style="width: 90px" alt=""> </div>
        <div class="col-2 pt-3"> <p>Banana</p> </div>
        <div class="col-2 pt-3"> <p>200 XFA</p> </div>
        <div class="col-2 pt-3"> 2</div>
        <div class="col-2 pt-2"> <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button> </div>
      </div>


  </div>

  <!-- Boton de modales -->
  <div class="botones w-25">

    <!-- modal para registrarse -->
    <button type="button" class=" ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#regitrarse">
            <i class="fa-solid fa-user-edit"></i> Registrarme
    </button>
     <!-- Formulario para el registro de cliente -->
    <div class="modal fade" id="regitrarse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    
                    <div class="modal-header">
                    <p class="text-center" >REGISTRASE COMO CLIENTE</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="cotainer-fluit">
                        <div class="container ">
                            <form class="from" action="" enctype="multipart/form-data" method="POST">
                                <input class="form-control input mt-3" type="text" placeholder="Nombre">
                                <input class="form-control input mt-3" type="text" placeholder="Direccion">
                                <input class="form-control input mt-3" type="text" placeholder="Telefono">
                                <input class="form-control input mt-3" type="email" placeholder="Correo">
                                <input class="form-control btn btn-primary mt-2" type="submit" value="REGISTRARME">
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>



    <!-- modal para solicitar reserva -->
    <button type="button" class=" ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#solicitarReserva">
            <i class="fa-solid fa-shopping-bag"></i> Solicitar Reserva
    </button>
     <!-- Formulario para solicitar reserva -->
    <div class="modal fade" id="solicitarReserva" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    
                    <div class="modal-header">
                    <p class="text-center" >SOLICITAR RESERVA</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="cotainer-fluit">
                        <div class="container ">
                            <form class="from" action="" method="POST">
                               
                            
                                <input class="form-control input mt-3" type="text" placeholder="Codigo de Cliente">
                                <input class="form-control btn btn-primary mt-3" type="submit" value="SOLICITAR RESERVA">
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    
  </div>
 </div>