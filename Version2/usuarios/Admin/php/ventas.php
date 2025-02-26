
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
                <p class="text-center h2 mb-5 fw-bold">VENTAS</p>
               

                    <!-- Tabla de los Empleados -->
 <div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>FECHA DE VENTA</th>
            <th>CLIENTE</th>
            <th>PRODUCTO</th>
            <th>EMPLEADO</th>
            <th>CANTIDAD</th>
            <th>PRECIO UNITARIO</th>
            <th>METODO DE PAGO</th>
            <th>TOTAL</th>
        </thead>
        <tbody>
            <tr>
                <td> 23/4/2025 </td>
                <td>Ana Trini</td>
                <td>Manzana </td>
                <td>Trinidad</td>
                <td>23</td>
                <td>1500 XFA</td>
                <td>Tarjeta</td>
                <td>25000 XFA</td>
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