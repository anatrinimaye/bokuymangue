


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
                <p class="text-center h2 mb-5 fw-bold">PRODUCTOS</p>
                

                    <!-- Tabla de los Empleados -->
 <div class="container ">
    <table class="table table-responsive table-hover table-striped text-center">
        <thead>
            <th>FOTO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CATEGORIA</th>
            <th>STOCK</th>
            
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../../img/ana.png" alt="">
                </td>
                <td>Cebolla</td>
                <td>250 XFA</td>
                <td>Citrico</td>
                <td>2000</td>
                
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












