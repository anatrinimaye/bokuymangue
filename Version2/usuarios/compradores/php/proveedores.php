

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
                <p class="text-center h2 mb-5 fw-bold">PROVEEDORES</p>
                

                    <!-- Tabla de los Proveedores -->
                    <div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>INCIO CONTRATO</th>
            <th>FIN CONTRATO</th>
            <!-- <th colspan="2">ACCIONES</th> -->
        </thead>
        <tbody>
            <tr>
                <td>EGTC</td>
                <td>Oyala</td>
                <td>+24022319976</td>
                <td>23/3/2023</td>
                <td>2/7/2027</td>
                <!-- <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    </a>
                </td> -->
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

