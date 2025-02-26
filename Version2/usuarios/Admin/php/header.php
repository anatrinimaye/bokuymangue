

<div class="head d-flex h5 pt-2 px-3">
                    <!-- Texto de Bienvenida -->
                    <div class=" col-lg-12 col-12 d-flex justify-content-center align-items-center">
                        <!-- Texto de Bienvenida -->
                        <div class="col-lg-6 col-12 d-lg-block d-none">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                                <button class="btn bg-success btn-outline-success" type="submit">
                                    <i class="fa-solid fa-magnifying-glass text-light"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-1"></div>
      
                        <!-- Usuario -->
                            <div class="col-lg-3 col-12 mb-3 align-items-end">
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

                        <button class="btn btnBurger d-lg-none d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            <i class="fa-solid fa-bars"></i>
                        </button>

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


                                    <a class="nav-link mt-2" href="./empleados.php">
                                    <i class="fa-solid fa-users-line"></i> Empleados</a>
                                        
                                    <a class="nav-link mt-4 fw-normal" href="./clientes.php">
                                    <i class="fa-solid fa-user-group"></i> Clientes</a>
                                            
                                    <a class="nav-link mt-4" href="./proveedores.php">
                                    <i class="fa-solid fa-people-group"></i> Proveedores</a>
                                        
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-box-open"></i> Pedidos</a>
                                        
                                    <a class="nav-link mt-4" href="./productos.php">
                                    <i class="fa-solid fa-apple-whole"></i> Productos</a>
                                            
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-comment-dots"></i> Comentarios</a>
                                            
                                    <a class="nav-link mt-4" href="./stcok.php">
                                    <i class="fa-solid fa-box"></i> Stock</a>
                                        
                                        
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-cart-shopping"></i> Compras</a>
                                        
                                    <a class="nav-link mt-4" href="">
                                    <i class="fa-solid fa-money-bill-1"></i> Ventas</a>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>