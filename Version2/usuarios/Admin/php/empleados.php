

<?php
require("../../conexion/conex.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/plantilla.css">
    <link rel="stylesheet" href="../css/empleados.css">
</head>
<body>

<div class="cajaGeneral d-flex">

    <div>
        <?php
            require("./aside.php");
        ?>
    </div>
<!-- Button trigger modal -->

    <!-- Modal De Registrar Nuevo empleado-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="fromulario">
                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"> REGISTRAR NUEVO EMPLEADO</h1>

                    <input class="form-control mt-4" placeholder="seleccione la foto" id="foto" name="foto" type="file">
                    <div class="alert alert-danger mt-2" id="errorFoto"></div>
                    
                    <input class="form-control mt-4" placeholder="Nombre" id="nom" name="nom" type="text">
                    <div class="alert alert-danger mt-2" id="errorNombre"></div>
                    
                    <input class="form-control mt-4" placeholder="Apellidos" id="apel" name="apel" type="text">
                    <div class="alert alert-danger " id="errorApellido"></div>
                    
                    <input class="form-control mt-4" placeholder="Correo" id="correo" name="correo" type="email">
                    <div class="alert alert-danger " id="errorCorreo"></div>
                    
                    <input class="form-control mt-4" placeholder="Fecha Contratacion" id="fecha" name="fecha" type="date">
                    <div class="alert alert-danger " id="errorFecha"></div>

                    <select class="form-control mt-4" name="rol" id="rol">
                        <option value="">Ingrese el Rol</option>
                        <?php
                                $mostrarRol= "SELECT * FROM rol";
                                $resultMostrar= $conex->query($mostrarRol);
                                while($rol=$resultMostrar->fetch_assoc()){
                        ?>
                        <option value="<?php echo $rol['cod_rol']?>"><?php echo $rol['nombre'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    
                    <div class="alert alert-danger " id="errorRol"></div>
                    
                    <select name="estado" id="estado" class="form-control mt-4">
                        <option value="">Estado</option>
                        <option value="">Activo</option>
                        <option value="">Inactivo</option>
                    </select>
                    <div class="alert alert-danger " id="errorEstado"></div>

                    <input class="form-control mt-4" placeholder="Salario" id="salario" name="salario" type="number">
                    <div class="alert alert-danger " id="errorsalario"></div>
                    
                    <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">REGISTRAR EMPLEADO</button>
                   
                </form>
            </div>

        </div>
    </div>
    </div>

   

     <!-- Caja de los Contenidos CUERPO -->
 <div class="cuerpo px-5">
                <?php
                    require("./header.php");
                ?>
                <!-- MODAL PARA EL NUEVO EMPLEADO -->
                

                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                <p class="text-center h2 mb-5 fw-bold">EMPLEADOS</p>
                
                <!-- Boton Modal De Registrar Nuevo empleado -->
                    <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-user-plus"></i> Nuevo Empleado
                    </button>


                    <!-- Tabla de los Empleados -->
                    <div class="container table-responsive">
                        <table class="table table-responsive table-hover table-striped text-center">
                            <thead>
                                <th class="bg-success">FOTO</th>
                                <th class="bg-success">NOMBRE</th>
                                <th class="bg-success">APELLIDOS</th>
                                <th class="bg-success">CORREO</th>
                                <th class="bg-success">TIPO</th>
                                <th class="bg-success">FECHA CONTRATACION</th>
                                <th class="bg-success">ESTADO</th>
                                <th class="bg-success">SALARIO</th>
                                <th class="bg-success">ACCION</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="rounded-pill" style="width:50px; height:50px" src="../../img/ana.png" alt="">
                                    </td>
                                    <td>ANA</td>
                                    <td>MAYE</td>
                                    <td>+24022319976</td>
                                    <td>Vendedor</td>
                                    <td>24/2/2020</td>
                                    <td >
                                        <p class="text-success fw-bold activa">Activo</p>
                                    </td>
                                    <td>100000</td>
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



<script src="../js/regisEmpleado.js"></script>
<script src="../../sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>
</html>





        
      



