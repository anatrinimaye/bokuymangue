
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
                <form action="">
                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"> REGISTRAR NUEVO EMPLEADO</h1>
                    <input class="form-control mt-4" placeholder="seleccione la foto" name="foto" type="file">
                    <input class="form-control mt-4" placeholder="Nombre" name="nom" type="text">
                    <input class="form-control mt-4" placeholder="Apellidos" name="apel" type="text">
                    <input class="form-control mt-4" placeholder="Telefono" name="tel" type="text">
                    <input class="form-control mt-4" placeholder="Fecha Contratacion" name="fecha" type="date">
                    <select name="" id="" class="form-control mt-4">
                        <option value="">Rol</option>
                        <option value="">Vendedor</option>
                        <option value="">Comprador</option>
                    </select>
                    <select name="" id="" class="form-control mt-4">
                        <option value="">Estado</option>
                        <option value="">Activo</option>
                        <option value="">Inactivo</option>
                    </select>
                    <input class="form-control btn btn-success mt-4" value="REGISTRAR EMPLEADO" name="btnEnviar" type="submit">
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
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>TELEFONO</th>
                                <th>CARGO</th>
                                <th>FECHA CONTRATACION</th>
                                <th>ESTADO</th>
                                <th>SALARIO</th>
                                <th>ACCION</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="rounded-pill" style="width:50px; height:50px" src="../../img/ana.png" alt="">
                                    </td>
                                    <td>ANA</td>
                                    <td>MAYE</td>
                                    <td>+24022319976</td>
                                    <td>DG</td>
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




</body>
</html>





        
      



