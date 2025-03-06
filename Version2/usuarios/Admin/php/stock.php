<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/plantilla.css">
</head>
<body>

<div class="cajaGeneral d-flex">



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header border-0">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO EMPLEADO -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                        <form action="">
                        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"> REGISTRAR NUEVO STOCK</h1>
                            <span class="mt-5">Fecha de Registro</span>
                            <input class="form-control" placeholder="Fecha de Registro" name="fecha" type="date">
                            <input class="form-control mt-4" placeholder="Precio" name="precio" type="number">
                            <select name="" id="" class="form-control mt-4">
                                <option value="">Producto</option>
                                <option value="">Citrico</option>
                                <option value="">Pomaceas</option>
                                <option value="">Tropicales</option>
                            </select>
                            <input class="form-control btn btn-success mt-4" value="REGISTRAR PRODUCTO" name="" type="submit">
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    <div>
        <?php
            require("./aside.php");
        ?>
    </div>

     <!-- Caja de los Contenidos CUERPO -->
 <div class="cuerpo px-5">
                <?php
                    require("./header.php");
                ?>
                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                <p class="text-center h2 mb-5 fw-bold">STOCK</p>
                <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-plus"></i> Añadir Stock
                </button>

                    <!-- Tabla de los Empleados -->
 <div class="container ">
    <table class="table table-responsive table-hover table-striped text-center">
        <thead>
            <th>PRODUCTO</th>
            <th>FECHA REGISTRO</th>
            <th>STOCK</th>
            <th>STOCK MINIMO</th>
            <th>ACCION</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../../img/ana.png" alt="">
                </td>
                <td>12/3/2025</td>
                <td>250</td>
                <td>100</td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
 </div>
                   
                </div>
                
        </div>

</div>

   
</div>

    

<script src="../js/bootstrap.min.js"></script>
</body>
</html>