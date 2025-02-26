


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
                    <p class="text-center h2 mb-5 fw-bold">CLIENTES</p>
<!-- Tabla de los Clientes -->
<div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>NOMBRE y APELLIDOS</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>CORREO</th>
            <th>PEDIDOS</th>
        </thead>
        <tbody>
            <tr>
                <td>ANA MAYE</td>
                <td>Oyala</td>
                <td>+24022319976</td>
                <td>anatrinimaye</td>
                <td>
                    <a href="" class="btn btn-warning">
                    <i class=" fa-solid fa-eye"></i>
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


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO EMPLEADO -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                            <form class="from" action="./registrar/regisEmpleado.php" enctype="multipart/form-data" method="POST">
                                <p class="text-center py-2" >REGISTRAR EMPEADO</p>
                                <input class="form-control input mt-2" type="file"  name="fot">
                                <input class="form-control input mt-2" type="text" placeholder="Nombre" name="nom">
                                <input class="form-control input mt-2" type="text" placeholder="Apellidos" name="apel">
                                <input class="form-control input mt-2" type="text" placeholder="Telefono" name="tel">
                                <label class="mt-2 ms-2 text-secondary">Fecha de Contratacion</label> 
                                <input class="form-control input" type="date" name="dia">
                                <select class="form-control input mt-2" name="cargo">
                                    <option value="">Cargo del Empleado</option>
                                    <option value="">Esto</option>
                                    <option value="">SRT</option>
                                    <option value="">ss</option>
                                </select>
                                <select class="form-control input mt-2" name="">
                                    <option value="">Estado del Empleado</option>
                                    <option value="">Activo</option>
                                    <option value="">Inactivo</option>
                                  
                                </select>
                                <input class="btn btn-primary mt-2" type="submit" value="REGISTRAR EMPLEADO" name="btnRegistrar">
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>



    
</body>
</html>



