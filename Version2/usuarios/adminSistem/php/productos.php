

<?php require("../../conexion/conex.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<link rel="stylesheet" href="../css/plantilla.css">
<link rel="stylesheet" href="../css/productos.css">
</head>
<body>

<div class="cajaGeneral d-flex">

    <div>
        <?php
            require("./aside.php");
        ?>
    </div>


    <div class="modal fade" id="modalinsert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalinsertLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="modal-header border-0">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- FORMULARIO PARA NUEVO EMPLEADO -->
                    <div class="cotainer-fluit">
                        <div class="container ">
                        <form action="" method="POST" enctype="multipart/form-data" id="formProductos">
                        <h1 class="modal-title fs-5 text-center" id="modalinsertLabel"> REGISTRAR NUEVO PRODUCTO</h1>
                            
                            <input class="form-control mt-4" name="foto" id="foto" type="file">
                            <div class="alert alert-danger" id="errorFoto"></div>

                            <input class="form-control mt-4" placeholder="Nombre" name="nom" id="nom" type="text">
                            <div class="alert alert-danger" id="errorNombre"></div>

                            <input class="form-control mt-4" placeholder="Precio" name="precio" id="precio" type="text">
                            <div class="alert alert-danger" id="errorPrecio"></div>
                            
                            <select name="cate" id="cate" class="form-control mt-4">
                                <option value="">Categoria</option>
                                <?php 
                                    $categoria = " SELECT * FROM categoria";
                                    $verCategoria = $conex ->query($categoria);
                                    while($cat = $verCategoria->fetch_assoc()) { 
                                ?>
                                    <option value="<?php echo $cat['cod_categoria']?>"><?php echo $cat['nombre'] ?></option>

                                <?php } ?>
                            </select>
                            <div class="alert alert-danger" id="errorCat"></div>
                            <button type="submit" class="btn btn-success form-control mt-4" name="btnRegistrar">REGISTRAR PRODUCTO</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

     <!-- Caja de los Contenidos CUERPO -->
 <div class="cuerpo px-5">
    <div>
        <?php
            require("./header.php");
        ?>
    </div>
                
                <!-- DASHBOARD -->
                <div class="container-fliud w-100 pt-3 dash mb-3">
                <p class="text-center h2 mb-5 fw-bold">PRODUCTOS</p>
                <button type="button" class="btn btn-primary ms-5 mb-5" data-bs-toggle="modal" data-bs-target="#modalinsert">
                        <i class="fa-solid fa-plus"></i> Nuevo Producto
                </button>

                    <!-- Tabla de los Empleados -->
 <div class="container table-responsive cajaTabla">
    <table class="table table-striped text-center">
        <thead>
            <th>FOTO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CATEGORIA</th>
            <th>ESTADO</th>
            <th>ACCION</th>
        </thead>
        <tbody id="tablaProductos">
            
        </tbody>
    </table>
 </div>
</div>
                
        </div>

</div>

</div>

    
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../../sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../js/productos.js"></script>

</body>
</html>












