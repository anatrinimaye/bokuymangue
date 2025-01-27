
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/heade.css">
    
</head>
<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg head " id="header">
        <div class="container-fluid px-5 py-3">
            <label class="nomEmp"> BOKUY MANGUE</label>
          
            <!-- <img class="rounded-pill ms-5" style="width:60px" src="./img/logo.png" alt=""> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
           
            <div class="collapse navbar-collapse alig-item-center cajEnlaces" id="navbarSupportedContent">
                <div class="bg-ligth d-flex buscador ms-5">
                    <i class="fa-solid fa-magnifying-glass p-2" style="cursor:pointer"></i>
                    <div class=" ">
                        <input class="inpt px-2 " type="search" placeholder="Buscar producto...">
                    </div>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 alig-item-center">
                    <!-- Inicio -->
                    <li class="nav-item ps-5">
                        <a class="nav-link" aria-current="page" href="../Version2/index.php">
                           Inicio
                        </a>
                    </li>
                    <!-- Sobre Nosotros -->
                    <li class="nav-item px-4">
                        <a class="nav-link" href="../Version2/sobrenosotros.php">
                            Sobre Nosotros
                        </a>
                    </li>
                    <!-- Productos -->
                    <li class="nav-item px-4">
                        <a class="nav-link" href="../Version2/productos.php">
                           Productos
                        </a>
                    </li>
                    <!-- Bog -->
                    <li class="nav-item px-4">
                        <a class="nav-link" href="./noticias.php">
                           Noticias
                        </a>
                    </li>
                </ul>  
            </div>   
        </div>
    </nav>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>