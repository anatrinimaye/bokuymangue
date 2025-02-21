
    <link rel="stylesheet" href="../Version2/css/heade.css">
    <!-- Header -->
    <div class="d-flex header py-1">
                <!-- enlaces -->
            <div class="col-lg-4 d-none d-lg-flex enlaces">
                <a class="nav-link" href="./index.php"> <span>Inicio</span> </a>
                <a class="nav-link" href="./sobrenosotros.php"> <span> Sobre Nosotros</span></a>
                <a class="nav-link" href="./productos.php"> <span> Productos</span></a>
                <a class="nav-link" href="./noticias.php"> <span>Noticias</span> </a>
                <a class="nav-link" href="./contactanos.php"> <span>Contáctanos</span></a>
            </div>

            <!-- Logo -->
            <div class="col-lg-3 col-md-12 d-flex logo">
                    <p class="h5"> <i class="fa-solid fa-apple-alt fs-5 pt-2"></i> <span class="text-dark">Bokuy</span> Mangue</p>
                <!-- BOTON DE LA AMBURGUESA-->
                <div class=" d-lg-none d-md-block burger ">
                    <button class="btn btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-bars fs-3"></i>
                    </button>
            
                </div>
            </div>
            
            <!-- Buscador y Boton de cambio de tema -->
            <div class="col-lg-2 d-none d-lg-flex buscYbtncambio">
              
                <!-- Boton de cambio de tema -->
                <button class="btncamTema d-none d-lg-flex" type="button" onclick="cambiarTema()">
                    <i class="fa-solid fa-moon pt-1"></i>
                </button>

            

            <!-- Cuerpo del offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <!-- Logo -->
                        <div class=" col-lg-3 d-flex logo">
                            <p> <i class="fa-solid fa-heart fs-3 pt-3"></i> </p>
                            <p class="h4"> <span class="text-primary">Bokuy</span> Mangue</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ">
                        <!-- enlaces -->
                        <div class=" enlaces ps-3">
                            <a class="nav-link " href="#"> <span>Inicio</span> </a>
                            <a class="nav-link mt-3" href="#"> <span> Sobre Nosotros</span></a>
                            <a class="nav-link mt-3" href="#"> <span>Páginas</span> </a>
                            <a class="nav-link mt-3 mb-2" href="#"><span>Contacto</span></a>
                            
                            
                            
                        </div>
                        <!-- Buscador y Boton de cambio de tema -->
                        <div class="col-md-3 buscYbtncambio">
                            <!-- Buscador -->
                            <form class="d-flex col-10 ps-3" role="search">
                                <button class="btn btn-success me-2" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <input class="form-control " type="search" placeholder="Buscar..." aria-label="Search">
                            </form>
                        </div>

                    
                    </div>
            </div>


    </div>

    
    <script>
        function cambiarTema() { 
        document.body.classList.toggle("oscuro"); }
    </script>
    <script src="../Version2/js/bootstrap.min.js"></script>
