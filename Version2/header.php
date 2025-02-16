
    <link rel="stylesheet" href="../Version2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Version2/css/heade.css">
    
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg head " id="header">
        <div class="container-fluid px-5 py-1">
            <div>
                <img class="rounded-pill" src="../Version2/img/BMblanco.jpg" style="width:45px ">
                <label class="nomEmpresa"> BOKUY MANGUE</label>
            </div>
                <!-- Boton del menu amburguesa -->
            <button class="btn bg-light d-lg-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <span class="navbar-toggler-icon "></span>
            </button>

            <div class="offcanvas offcanvas-end d-lg-none d-md-block" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="staticBackdropLabel ps-5">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <div class="d-flex flex-column">
                        <ul class="navbar-nav me-auto ms-5">
                            <!-- Inicio -->
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../Version2/index.php">
                                Inicio
                                </a>
                            </li>
                            <!-- Sobre Nosotros -->
                            <li class="nav-item">
                                <a class="nav-link" href="../Version2/sobrenosotros.php">
                                    Sobre Nosotros
                                </a>
                            </li>
                            <!-- Productos -->
                            <li class="nav-item">
                                <a class="nav-link" href="../Version2/productos.php">
                                Productos
                                </a>
                            </li>
                            <!-- Bog -->
                            <li class="nav-item">
                                <a class="nav-link" href="./noticias.php">
                                Noticias
                                </a>
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>
           <!-- Header para pc -->
            <div class="collapse navbar-collapse cajEnlaces" id="navbarSupportedContent"> 
                <ul class="navbar-nav nav justify-content-end col-lg-11 me-auto ms-5">
                    <!-- Inicio -->
                    <li class="nav-item px-3">
                        <a class="nav-link " aria-current="page" href="../Version2/index.php">
                           Inicio
                        </a>
                    </li>
                    <!-- Sobre Nosotros -->
                    <li class="nav-item px-3">
                        <a class="nav-link " href="../Version2/sobrenosotros.php">
                            Sobre Nosotros
                        </a>
                    </li>
                    <!-- Productos -->
                    <li class="nav-item px-3">
                        <a class="nav-link " href="../Version2/productos.php">
                           Productos
                        </a>
                    </li>
                    <!-- Bog -->
                    <li class="nav-item px-3">
                        <a class="nav-link " href="./noticias.php">
                           Noticias
                        </a>
                    </li>
                    <!-- Contactanos -->
                    <li class="nav-item px-3">
                        <a class="nav-link " href="./contactanos.php">
                           Contáctanos
                        </a>
                    </li>
                </ul>  
            </div>   
        </div>
    </nav>

    <script src="../Version2/js/bootstrap.min.js"></script>
