

<?php
require("../../conexion/conex.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
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


      <!-- Modal De Registrar Nuevo empleado-->
<div class="modal fade" id="modalinsert" tabindex="-1" aria-labelledby="modalinsertLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="fromulario">
                    <h1 class="modal-title fs-5 text-center" id="modalinsertLabel"> REGISTRAR NUEVO EMPLEADO</h1>

                    <input class="form-control mt-4" placeholder="seleccione la foto" id="foto" name="foto" type="file">
                    <div class="alert alert-danger mt-2" id="errorFoto"></div>
                    
                    <input class="form-control mt-4" placeholder="Nombre" id="nom" name="nom" type="text">
                    <div class="alert alert-danger mt-2" id="errorNombre"></div>
                    
                    <input class="form-control mt-4" placeholder="Apellidos" id="apel" name="apel" type="text">
                    <div class="alert alert-danger " id="errorApellido"></div>
                    
                    <input class="form-control mt-4" placeholder="Correo" id="correo" name="correo" type="email">
                    <div class="alert alert-danger " id="errorCorreo"></div>
                    
                    <label class="mt-4 ms-2">Fecha de Contratacion:</label>
                    <input class="form-control" placeholder="Fecha Contratacion" id="fecha" name="fecha" type="date">
                    <div class="alert alert-danger " id="errorFecha"></div>

                    <select class="form-control mt-4" name="rol" id="rol">
                        <option value="">Ingrese al tipo de empleado</option>
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
                    
                    <!-- <select name="estado" id="estado" class="form-control mt-4">
                        <option value="">Estado</option>
                        <option value="">Activo</option>
                        <option value="">Inactivo</option>
                    </select>
                    <div class="alert alert-danger " id="errorEstado"></div> -->

                    <input class="form-control mt-4" placeholder="Salario" id="salario" name="salario" type="number">
                    <div class="alert alert-danger " id="errorsalario"></div>
                    
                    <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">REGISTRAR EMPLEADO</button>
                </form>
            </div>

        </div>
    </div>
</div>


      <!-- Modal De Actualizar empleado-->
      <div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalinsertLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="formulario">
                    <h1 class="modal-title fs-5 text-center" id="modalinsertLabel"> ACTUALIZAR EMPLEADO</h1>
                    <input type="hidden" class="form-control w-100 mb-3 ps-2" name="cod_empleado" id="cod_empl" placeholder="Codigo Empleado">
                    <input class="form-control mt-4" placeholder="seleccione la foto" id="foto" name="foto" type="file">   
                    <input class="form-control mt-4" placeholder="Nombre" id="nom" name="nom" type="text">    
                    <input class="form-control mt-4" placeholder="Apellidos" id="apel" name="apel" type="text">
                    <input class="form-control mt-4" placeholder="Correo" id="correo" name="correo" type="email">
                    <label class="mt-4 ms-2">Fecha de Contratacion:</label>
                    <input class="form-control" placeholder="Fecha Contratacion" id="fecha" name="fecha" type="date">
                    <select class="form-control mt-4" name="rol" id="rol">
                        <option value="">Ingrese al tipo de empleado</option>
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
                    <input class="form-control mt-4" placeholder="Salario" id="salario" name="salario" type="number">
                    
                    <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">ACTUALIZAR EMPLEADO</button>
                </form>
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
                <p class="text-center h2 mb-5 fw-bold">EMLEADOS</p>
                <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#modalinsert">
                        <i class="fa-solid fa-user-plus"></i> Nuevo empleado
                </button>

 <!-- Tabla de los Empleados -->
                    <div class="container table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>CORREO</th>
                                <th>FECHA CONTRATACION</th>
                                <th>ESTADO</th>
                                <th>SALARIO</th>
                                <th>ROL</th>
                                <th>ACCION</th>
                            </thead>
                            <tbody id="tablaEmpleado">


                            </tbody>
                        </table>
                    </div>
</div>
                
        </div>

</div>

</div>

    
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../../sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../js/empleados.js"></script>
</body>
</html>





















        
      



