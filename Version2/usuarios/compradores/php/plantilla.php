
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/plantilla.css">
</head>
<body>
    <!-- Caja General -->
    <div class="container-fluit bg-ligth cajaGeneral d-flex">
        
        <!-- Caja De Navegacion ASIDE -->
        <div class="container aside">
            <!-- Logo -->
             <div class=" pt-5 ms-5 logo">
                <img class="rounded-pill" src="../../img/BMblanco.jpg" alt="">
             </div>
            <div class="container asid">
                <ul class="nav mt-4">
                    
                   
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="./proveedores.php">
                        <i class="fa-solid fa-people-group"></i> Proveedores</a>
                    </li>
                  
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="./productos.php">
                        <i class="fa-solid fa-apple-whole"></i> Productos</a>
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-comment-dots"></i> Comentarios</a>
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="./stcok.php">
                        <i class="fa-solid fa-box"></i> Stock</a>
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-cart-shopping"></i> Compras</a>
                    </li>
                    
                    <li class="nav-item mt-4">
                        <a class="nav-link " href="./dashboard.php">
                        <i class="fa-solid fa-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link" href="../../index.php">
                        <i class="fa-solid fa-angles-left"></i>LOGOUT</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        
        <!-- Caja de los Contenidos CUERPO -->
        <div class="header">
            <!-- Caja de arriba Buscador y Usuario -->
            <div class="d-flex head py-5">
                    <!-- Buscador -->
                <div class="bg-ligth d-flex buscador">
                    
                    <i class="fa-solid fa-magnifying-glass p-2" style="cursor:pointer"></i>
                    <div class=" w-100">
                        <input class="inpt w-100 p-1 " type="search" placeholder="Buscar...">
                    </div>
                </div>
                <!-- Usuario -->
                <div class="usuario d-flex">
                    <!-- Campanilla de notificaciones -->
                    <button type="button" class="btn btn-primary position-relative">
                            <i class="fa-solid fa-bell fs-25"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>
                    <!-- Foto del usuario -->
                    <img class="rounded-pill" src="../../img/matu.jpg" alt="">
                    <p class="pt-3">Ana Trini <br> Admin</p>
                </div>
            </div>


          



     <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>