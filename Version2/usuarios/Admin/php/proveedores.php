

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link rel="stylesheet" href="../css/plantilla.css">
</head>
<body>

<div class="cajaGeneral d-flex">




    <!-- Modal De Registrar Nuevo Proveedor-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" action="" method="POST">
                    <p class="text-center py-2 h4" >REGISTRAR PROVEEDOR</p>
                    <input class="form-control input mt-3" type="text" placeholder="Nombre">
                    <input class="form-control input mt-3" type="text" placeholder="Direccion">
                    <input class="form-control input mt-3" type="text" placeholder="Telefono">
                    <label class="mt-2 ms-2 text-secondary">Inicio_Contrato</label> 
                    <input class="form-control input" type="date">
                    <label class="mt-2 ms-2 text-secondary">Fin_Contrato</label> 
                    <input class="form-control input" type="date">
                    <input class="btn btn-primary mt-5" type="submit" value="REGISTRAR PROVEEDOR">
                                
                </form>
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
                <!-- MODAL PARA EL NUEVO EMPLEADO -->
                

                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                <p class="text-center h2 mb-5 fw-bold">PROVEEDOR</p>
                
                <!-- Boton Modal De Registrar Nuevo empleado -->
                    <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-user-plus"></i> Nuevo Proveedor
                    </button>


                    <!-- Tabla de los Proveedores -->
                    <div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>INCIO CONTRATO</th>
            <th>FIN CONTRATO</th>
            <!-- <th colspan="2">ACCIONES</th> -->
        </thead>
        <tbody>
            <tr>
                <td>EGTC</td>
                <td>Oyala</td>
                <td>+24022319976</td>
                <td>23/3/2023</td>
                <td>2/7/2027</td>
                <!-- <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    </a>
                </td> -->
            </tr>
        </tbody>
    </table>
 </div>
                   
                </div>
                
        </div>

</div>

   
</div>

<script type="module" src="../js/bootstrap.min.js"></script>
    
</body>
</html>

