<?php
    require "../../conexion/conex.php";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="../css/plantilla.css"> -->
   <link rel="stylesheet" href="../css/dashboard.css">
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    
    <!-- Caja General -->
    <div class="container-fluit cajaGeneral d-flex">
        
        <!-- Caja De Navegacion ASIDE -->
        <div class="container aside">
            <!-- Logo -->
             <div class="pt-3 logo">
                <div class="log ps-5">
                    <img class="rounded-pill" src="../../img/rosa.jpg" alt="">
                </div>
                <div class="usuar">
                    <p class="pt-2 text-center user"> 
                        ANA TRINI 
                        <span> anatrinimaye@gmail.com </span>
                    </p>
                    
                </div>
                
               
             </div>
             
            <div class="container asid">
                <ul class="nav mt-4">
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="./empleados.php">
                        <i class="fa-solid fa-users-line"></i> Empleados</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link " href="./clientes.php">
                        <i class="fa-solid fa-user-group"></i> Clientes</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="./proveedores.php">
                        <i class="fa-solid fa-people-group"></i> Proveedores</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-box-open"></i> Pedidos</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="./productos.php">
                        <i class="fa-solid fa-apple-whole"></i> Productos</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-comment-dots"></i> Comentarios</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="./stcok.php">
                        <i class="fa-solid fa-box"></i> Stock</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-cart-shopping"></i> Compras</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link " href="">
                        <i class="fa-solid fa-money-bill-1"></i> Ventas</a>
                    </li>
                    <li class="nav-item mt-2">
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
        <div class="cuerpo px-5">
                <div class="head d-flex h5 mt-4 px-3">
                    <!-- Texto de Bienvenida -->
                    <div class="">
                        <p class="">Dashboard User</p>
                    </div>
                    <!-- Boton de Menu -->
                    <div class="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Características</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Precios</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <!-- DASHBOARD -->
                <div class="container-fliut w-100 pt-3 dash mb-3">
                    <div class="container cajas d-flex">
                        <div class="caja py-1">
                        <i class="fa-solid fa-users-line"></i>
                            <p>Empleados</p>
                            <p class="dasNum">13</p>
                        </div>
                        <div class="caja py-1">
                        <i class="fa-solid fa-people-group"></i>
                            <p>Proveedores</p>
                            <p class="dasNum">3</p>
                        </div>
                        
                        <div class="caja py-1">
                        <i class="fa-solid fa-apple-whole"></i>
                            <p>Productos</p>
                            <p class="dasNum">1500</p> 
                        </div>
                        <!-- <div class="caja py-1">
                            <i class=" fa-solid fa-box-open"></i>
                            <p>Pedidos</p>
                            <p class="dasNum">200</p>
                        </div> -->
                        <div class="caja py-1">
                            <i class="fa-solid fa-user-group"></i>
                            <p>Clientes</p>
                            <p class="dasNum">23</p>
                        </div>
                    </div>
                </div>

                <!-- GRAFICOS -->
                <div class=" mt-3" id="graficos">
                    <!-- Graficos -->
                    <div class="">
                        <!-- Ventas -->
                        <div class="grafico">
                            <canvas id="grafVentas"></canvas>
                        </div>
                        <!-- Compras -->
                        <div class="grafico">
                            <canvas id="grafCompras"></canvas>
                        </div>
                    </div>
                    <!-- caja lateral -->
                     <div>

                     </div>
                    
                </div>
                

                
        </div>
    </div>

      

                


    <script src="../js/graficas.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>


      
  

    