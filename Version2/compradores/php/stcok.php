<?php
    require "./plantilla.php"
?>

<!-- Titulo Para saber Donde Estamos -->
<h2 class="text-center py-4 titulo">STOCK DE LOS PRODUCTOS</h2>

<!-- MODAL PARA EL NUEVO EMPLEADO -->
<button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="fa-solid fa-user-plus"></i> Nuevo Stock
</button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO STOCK -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                            <form class="from" action="" enctype="multipart/form-data" method="POST">
                                <p class="text-center py-2" >REGISTRAR STOCK</p>
                                <input class="form-control input mt-2" type="file">
                                <select class="form-control input mt-2" name="">
                                    <option value="">Nombre de la Fruta</option>
                                    <option value="">Aguacate</option>
                                </select>
                                <input class="form-control input mt-2" type="text" placeholder="Cantidad en Stock">
                                <input class="form-control input mt-2" type="text" placeholder="Stock Minimo">
                                
                                <input class="btn btn-primary mt-2" type="submit" value="REGISTRAR STOCK">
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Tabla de los Clientes -->
<div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>FRUTA</th>
            <th>NOMBRE FRUTA</th>
            <th>CANTIDAD</th>
            <th>STOCK MINIMO</th>
            <!-- <th>ACCION</th> -->
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../img/aguacate.jpg" alt="">
                </td>
                <td>AGUACATE</td>
                <td>230</td>
                <td>10</td>
                <!-- <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td> -->
            </tr>
        </tbody>
    </table>
 </div>