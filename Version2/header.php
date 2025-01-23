
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Header</title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/heade.css">
    
</head>
<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg head">
        <div class="container-fluid">
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
                    <li class="nav-item px-5">
                        <a class="nav-link" aria-current="page" href="../Version2/index.php">
                            <i class="fa-solid fa-house"></i>
                            Inicio
                        </a>
                    </li>
                    <!-- Sobre Nosotros -->
                    <li class="nav-item px-5">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-users"></i> 
                            Sobre Nosotros
                        </a>
                    </li>
                    <!-- Productos -->
                    <li class="nav-item px-5">
                        <a class="nav-link" href="../Version2/productos.php">
                            <i class="fa-solid fa-apple-whole"></i> 
                            Productos
                        </a>
                    </li>
                    <!-- Bog -->
                    <li class="nav-item px-5">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-newspaper"></i>
                            Blog
                        </a>
                    </li>

                <!-- <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-gear"></i> Sistem
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./Admin/php/dashboard.php">
                            <label><i class="fa-solid fa-user-tie"></i> Admin</label></a></li>
                        <li><a class="dropdown-item" href="#">
                            <label> <i class="fa-solid fa-money-bill"></i> Vendedores</label> </a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-credit-card"></i> Comprador</a></li>
                    </ul>
                </li> -->
                </ul>
                
            </div>   
        </div>
    </nav>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>