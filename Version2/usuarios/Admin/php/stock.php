
<?php require("../../conexion/conex.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/plantilla.css">
    <link rel="stylesheet" href="../css/stock.css">
</head>
<body>

<div class="cajaGeneral d-flex">



<div class="modal fade" id="modalinsert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header border-0">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO STOCK -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                        <form action="" method="POST" id="formStock">
                        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel"> REGISTRAR NUEVO STOCK</h1>

                            <input class="form-control mt-4" placeholder="Stock Disponible" name="stock" id="stock" type="number">
                            <div class="alert alert-danger" id="errorStock"></div>

                            <input class="form-control mt-4" placeholder="Stock Minimo" name="stockMin" id="stockMin" type="number">
                            <div class="alert alert-danger" id="errorStockMin"></div>
                            
                            <select name="prod" id="prod" class="form-control mt-4">
                                <option value="">Producto</option>
                                <?php 
                                    $productos= " SELECT * FROM productos";
                                    $verProductos = $conex ->query($productos);
                                    while($prod = $verProductos->fetch_assoc()) { 
                                ?>
                                    <option value="<?php echo $prod['cod_producto']?>"><?php echo $prod['nombre'] ?></option>

                                <?php } ?>
                            </select>
                            <div class="alert alert-danger" id="errorProducto"></div>

                             <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">REGISTRAR STOCK</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


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
                <p class="text-center h2 mb-5 fw-bold">STOCK</p>
                <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#modalinsert">
                        <i class="fa-solid fa-plus"></i> Añadir Stock
                </button>

                    <!-- Tabla de los Empleados -->
 <div class="container ">
    <table class="table table-responsive table-hover table-striped text-center">
        <thead>
            <th>FOTO</th>
            <th>NOMBRE</th>
            <th>FECHA REGISTRO</th>
            <th>STOCK DISPONIBLE</th>
            <th>STOCK MINIMO</th>
            <th>ACCION</th>
        </thead>
        <tbody id="tablaStock">
            <!-- <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../../img/ana.png" alt="">
                </td>
                <td>Mango</td>
                <td>12/3/2025</td>
                <td>250</td>
                <td>100</td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr> -->
        </tbody>
    </table>
 </div>
                   
                </div>
                
        </div>

</div>

   
</div>

<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../../sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../js/stock.js"></script>
</body>
</html>