
<?php
    require "./plantilla.php"  
?>

<!-- Titulo Para saber Donde Estamos -->
<h2 class="text-center py-3 titulo">PRODUCTOS</h2>



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