
<?php
    require "./plantilla.php"  
?>

<!-- Titulo Para saber Donde Estamos -->
<h2 class="text-center py-3 titulo">PRODUCTOS</h2>

<!-- MODAL PARA EL NUEVO EMPLEADO -->
<button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="fa-solid fa-plus"></i> Nuevo Fruta
</button>

        <!-- FORMULARIO PARA NUEVO EMPLEADO -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   <!-- FORMULARIO PARA NUEVO PRODUCTO -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                            <form class="from" action="" enctype="multipart/form-data" method="POST">
                                <p class="text-center py-2" >REGISTRAR FRUTA</p>
                                <input class="form-control input mt-2" type="file">
                                <input class="form-control input mt-2" type="text" placeholder="Nombre">
                                <input class="form-control input mt-2" type="text" placeholder="Precio Unitario">
                                <input class="form-control input mt-2" type="text" placeholder="Telefono">
                                <select class="form-control input mt-2" name="">
                                    <option value="">Categoria de la Fruta</option>
                                    <option value="">Citrico</option>
                                    <option value="">Drupa</option>
                                    <option value="">Tropical</option>
                                </select>
                                <input class="btn btn-primary mt-2" type="submit" value="REGISTRAR FRUTA">
                                
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
            <th>PRECIO</th>
            <th>CATEGORIA</th>
            <th colspan="2">ACCIONES</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../img/cebolla.webp" alt="">
                </td>
                <td>Cebolla</td>
                <td>250 XFA</td>
                <td>Citrico</td>
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