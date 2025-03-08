
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

     <!-- Caja de los Contenidos CUERPO -->
 <div class="cuerpo px-5">
                <?php
                    require("./header.php");
                ?>
                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                    <p class="text-center h2 mb-5 fw-bold">CLIENTES</p>
<!-- Tabla de los Clientes -->
<div class="container table-responsive">
    <table class="table table-hover table-striped text-center">
        <thead>
            <th>NOMBRE y APELLIDOS</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>CORREO</th>
            <th>PEDIDOS</th>
        </thead>
        <tbody>
            <tr>
                <td>ANA MAYE</td>
                <td>Oyala</td>
                <td>+24022319976</td>
                <td>anatrinimaye</td>
                <td>
                    <a href="" class="btn btn-warning">
                    <i class=" fa-solid fa-eye"></i>
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



