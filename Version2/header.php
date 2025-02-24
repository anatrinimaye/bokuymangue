
    <link rel="stylesheet" href="../Version2/css/heade.css">
    <!-- Header -->
    <div class="d-flex header">
                <!-- enlaces -->
            <div class="col-lg-4 col-11 d-none d-lg-flex enlaces">
                <a class="nav-link" href="./index.php"> <span>Inicio</span> </a>
                <a class="nav-link" href="./sobrenosotros.php"> <span> Sobre Nosotros</span></a>
                <a class="nav-link" href="./productos.php"> <span> Productos</span></a>
                <a class="nav-link" href="./noticias.php"> <span>Noticias</span> </a>
                <a class="nav-link" href="./contactanos.php"> <span>Contáctanos</span></a>
            </div>

            <!-- Logo -->
            <div class="col-lg-4 col-12 d-flex logo">
                    <p class="h5 col-8"> <i class="fa-solid fa-apple-alt fs-5 pt-2"></i> <span class="text-dark">Bokuy</span> Mangue</p>
                <!-- BOTON DE LA AMBURGUESA-->
                <div class=" d-lg-none d-md-block burger">
                    <button class="btn btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <i class="fa-solid fa-bars fs-3"></i>
                    </button>

                    
                    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <p class="h5"> <i class="fa-solid fa-apple-alt fs-5 pt-2"></i> <span class="text-dark">Bokuy</span> Mangue</p>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ps-5 enlacs">
                            <div>
                                <a class="nav-link mt-3" href="./index.php"> <span>Inicio</span> </a>
                                <a class="nav-link mt-3" href="./sobrenosotros.php"> <span> Sobre Nosotros</span></a>
                                <a class="nav-link mt-3" href="./productos.php"> <span> Productos</span></a>
                                <a class="nav-link mt-3" href="./noticias.php"> <span>Noticias</span> </a>
                                <a class="nav-link mt-3" href="./contactanos.php"> <span>Contáctanos</span></a>
                            
                            </div>
                        </div>
                    </div>
                   
            
                </div>
            </div>
            
            <!-- Buscador y Boton de cambio de tema -->
            <div class="col-lg-2 d-none d-lg-flex buscYbtncambio">
              
                <!-- Boton de cambio de tema -->
                <button class="btncamTema d-none d-lg-flex" type="button" onclick="cambiarTema()">
                    <i class="fa-solid fa-moon pt-1"></i>
                </button>

   



    </div>

    
    <script>
        function cambiarTema() { 
        document.body.classList.toggle("oscuro"); }
    </script>
    
