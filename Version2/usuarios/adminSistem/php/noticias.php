
<?php require("../../conexion/conex.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<link rel="stylesheet" href="../css/plantilla.css">
<link rel="stylesheet" href="../css/noticias.css">
</head>
<body>

<div class="cajaGeneral d-flex">

    <div>
        <?php
            require("./aside.php");
        ?>
    </div>


    <div class="modal fade" id="modalinsert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalinsertLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header border-0">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO EMPLEADO -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                        <form action="" method="POST" enctype="multipart/form-data" id="formNoticia">
                        <h1 class="modal-title fs-5 text-center" id="modalinsertLabel"> REGISTRAR NUEVA NOTICIA</h1>
                            
                            <input class="form-control mt-4" name="foto" id="foto" type="file">
                            <div class="alert alert-danger" id="errorFoto"></div>

                            <input class="form-control mt-4" placeholder="Titulo" name="titul" id="titul" type="text">
                            <div class="alert alert-danger" id="errorTitulo"></div>

                            <input class="form-control mt-4" placeholder="Fecha del Evento" name="fecha" id="fecha" type="date">
                            <div class="alert alert-danger" id="errorFecha"></div>

                            <textarea class="form-control mt-4" name="descrip" id="descrip" placeholder="Descripcion" style="height: 100px; resize:none;"></textarea>
                            <div class="alert alert-danger" id="errorDescrip"></div>

                            <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">REGISTRAR NOTICIA</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

     <!-- Caja de los Contenidos CUERPO -->
 <div class="cuerpo px-5">
    <div>
        <?php
            require("./header.php");
        ?>
    </div>
                
                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                <p class="text-center h2 mb-5 fw-bold">NOTICAS</p>
                <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#modalinsert">
                        <i class="fa-solid fa-plus"></i> Nueva Noticia
                </button>

                    <!-- Tabla de los Empleados -->
 <div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>FOTO</th>
            <th>TITULO</th>
            <th>DESCRIPCION</th>
            <th>FECHA DEL EVENTO</th>
            <th>ACCION</th>
        </thead>
        <tbody id="tablaNoticia">
            
        </tbody>
    </table>
 </div>
</div>
                
        </div>

</div>

</div>

    
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../../sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../js/noticias.js"></script>

</body>
</html>