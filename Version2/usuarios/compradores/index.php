<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="../css/plantilla.css"> -->
   <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    
    <!-- Caja General -->
    <div class="cajaGeneral d-flex">
        
        <!-- Caja De Navegacion ASIDE -->
        <div class="container aside">
            <!-- Logo -->
             <div class="pt-5 logo">
                <div class="log ps-5">
                    <img class="rounded-pill" src="../../img/BMblanco.jpg" alt="">
                </div>
             </div>
             
            <div class="container asid">
                <ul class="nav mt-4">
                    
                    
                    <li class="nav-item mt-5">
                        <a class="nav-link" href="./php/proveedores.php">
                        <i class="fa-solid fa-people-group"></i> Proveedores</a>
                    </li>
                    <!-- <li class="nav-item mt-2">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-box-open"></i> Pedidos</a>
                    </li> -->
                    <li class="nav-item mt-5">
                        <a class="nav-link" href="./php/productos.php">
                        <i class="fa-solid fa-apple-whole"></i> Productos</a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-comment-dots"></i> Comentarios</a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link" href="./php/compras.php">
                        <i class="fa-solid fa-cart-shopping"></i> Compras</a>
                    </li>
                                                        
                </ul>
                        
            </div>
        </div>
        
        <!-- Caja de los Contenidos CUERPO -->
        <div class="cuerpo px-5">
                <div class="head d-flex h5 pt-2 px-3">
                    <!-- Texto de Bienvenida -->
                    <div class=" col-lg-11 col-12 d-flex justify-content-center align-items-center">
                        <!-- Texto de Bienvenida -->
                        <div class="col-lg-7 col-12 d-lg-block d-none">
                            <p class="ps-5  tit" style="font-weight: bold ">BIENVENIDO AL PANEL DEL <span class="text-success fw-bold">COMPRADOR</span> </p>
                        </div>
      
                        <!-- Usuario -->
                            <div class="col-lg-3 col-12 mb-3">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle d-flex align-items-center mt-4 ps-4 border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="usuario d-flex gap-2">
                                            <div class="log">
                                                <img class="rounded-pill" src="../../img/ana.png" alt="">
                                            </div>
                                            <div class="user mt-2">
                                                <p>Ana Trini <br> <span>anatrini@mail.com</span></p>
                                            
                                            </div>
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-left bg-secondary" >
                                        <li><a class="dropdown-item text-dark" href="#">Perfil</a></li>
                                        <!-- <li><a class="dropdown-item text-dark" href="#">Configuracion</a></li> -->
                                        <li><a class="dropdown-item text-dark" href="../index.php">Cerrar Sesion</a></li>
                                    </ul>
                                </div>
                            </div>



                        <div class="col-2 d-flex mb-2 d-lg-block d-none align-items-end">
                                    <!-- Campanilla de notificaciones -->
                            <button type="button" class="btn position-relative">
                                    <i class="fa-solid fa-bell fs-5 bg-success p-2 rounded-pill text-light"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                    9
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>

                            <!-- Campanilla de notificaciones -->
                            <button type="button" class="btn position-relative rounded">
                                    <i class="fa-solid fa-envelope fs-5 bg-success p-2 rounded-pill text-light"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>

                        </div>
                    </div>

                    <!-- Boton de Menu -->
                    <div class="">

                       

                        <div class="offcanvas offcanvas-start bg-success" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title ps-2" id="staticBackdropLabel">BOKUY MANGUE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">

                             <!-- Usuario -->

                             <div class="col-12 d-flex align-items-center ps-0">
                                            <div class="col-6 mb-2">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle d-flex align-items-center ps-4 border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="usuario gap-2">
                                                        <div class="log">
                                                            <img class="rounded-pill" src="../../img/ana.png" alt="">
                                                        </div>
                                                        <div class="user mt-2">
                                                            <p>Ana Trini <br> <span>anatrini@mail.com</span></p>
                                                        
                                                        </div>
                                                    </div>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-left bg-secondary" >
                                                    <li><a class="dropdown-item text-dark" href="#">Perfil</a></li>
                                                    <!-- <li><a class="dropdown-item text-dark" href="#">Configuracion</a></li> -->
                                                    <li><a class="dropdown-item text-dark" href="../index.php">Cerrar Sesion</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex align-items-end mb-3">
                                                    <!-- Campanilla de notificaciones -->
                                            <button type="button" class="btn position-relative">
                                                    <i class="fa-solid fa-bell fs-5 bg-success p-2 rounded-pill text-light"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                                    9
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>

                                            <!-- Campanilla de notificaciones -->
                                            <button type="button" class="btn position-relative rounded">
                                                    <i class="fa-solid fa-envelope fs-5 bg-success p-2 rounded-pill text-light"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                                    4
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                <div class="ps-4 menuBurger">

                                    <a class="nav-link mt-2" href="">
                                    <i class="fa-solid fa-users-line"></i> Compras</a>
                                        
                                    <a class="nav-link mt-4 fw-normal" href="./php/clientes.php">
                                    <i class="fa-solid fa-user-group"></i> Clientes</a>
                                            
                                    <a class="nav-link mt-4" href="./proveedores.php">
                                    <i class="fa-solid fa-people-group"></i> Proveedores</a>
                                        
                                    <a class="nav-link mt-4" href="./productos.php">
                                    <i class="fa-solid fa-apple-whole"></i> Productos</a>
                                            
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-comment-dots"></i> Comentarios</a>
                                        
                                        
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-cart-shopping"></i> Compras</a>
                                        
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-money-bill-1"></i> Ventas</a>
                                   
                                            
                                    
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- DASHBOARD -->
                <div class="container-fliut w-100 pt-3 dash mb-3">
                    <div class="container cajas d-flex">
                        <div class="caja py-1">
                        <i class="fa-solid fa-users-line py-3"></i>
                            <p>Compras</p>
                            <p class="dasNum">13</p>
                        </div>
                        <div class="caja py-1">
                        <i class="fa-solid fa-people-group py-3"></i>
                            <p>Proveedores</p>
                            <p class="dasNum">3</p>
                        </div>
                        
                        <div class="caja py-1">
                        <i class="fa-solid fa-apple-whole py-3"></i>
                            <p>Productos</p>
                            <p class="dasNum">1500</p> 
                        </div>
                        <!-- <div class="caja py-1">
                            <i class=" fa-solid fa-box-open"></i>
                            <p>Pedidos</p>
                            <p class="dasNum">200</p>
                        </div> -->
                        
                    </div>
                </div>

                <!-- GRAFICOS -->
                 <div class="col-lg-8">
                 <canvas id="miGraficoCompras"></canvas>
                </div>
                
        </div>
    </div>




    <script src="./js/chart.umd.js"></script>
    <script src="./js/graficas.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>
