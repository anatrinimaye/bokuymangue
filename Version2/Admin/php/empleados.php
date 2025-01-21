
<?php
    require "./plantilla.php";
    require "../conexion/conex.php";
?>

<!-- Titulo Para saber Donde Estamos -->
<h2 class="text-center py-3 titulo">EMPLEADOS</h2>

<!-- MODAL PARA EL NUEVO EMPLEADO -->
<button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="fa-solid fa-user-plus"></i> Nuevo Empleado
</button>

        
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

 <!-- Tabla de los Empleados -->
 <div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>FOTO</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELEFONO</th>
            <th>CARGO</th>
            <th>FECHA CONTRATACION</th>
            <th>ESTADO</th>
            <th colspan="2">ACCIONES</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../../img/jose.jpg" alt="">
                </td>
                <td>ANA</td>
                <td>MAYE</td>
                <td>+24022319976</td>
                <td>DG</td>
                <td>24/2/2020</td>
                <td >
                    <p class="text-success fw-bold activa">Activo</p>
                </td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
 </div>



