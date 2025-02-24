
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactanos</title>
    <link rel="stylesheet" href="./css/contactanos.css">
</head>
<body>
    <!-- Contactos antes del header -->
     <div>
        <?php
            require ("./contact.php");
        ?>
     </div>
     <!-- HEADER -->
     <div>
        <?php
            require ("./header.php");
        ?>
     </div>
   
    
   
    <!-- BANNER -->
    <div class="container-fluid px-5 banner" id="contact">
        <div class="container">
            <p class="h1 py-5 text-light text-center">Contactanos</p>
        </div>
    </div>


    <!-- CONTACTANOS -->
    <div class="cajaGeneral">
                <!-- Caja de los contactos -->
            <div class="contactos pt-3 px-4 bg-success">
                    <h5 class="mb-4 text-dark">Encuentranos en </h5>
                    <!-- contactos  -->
                    <div class="contacto">
                        <div class="cadaCont d-flex mb-3 ps-3 pt-2">
                            <i class="fa-solid fa-location-dot fs-5 pt-3 pe-3"></i>
                            <p>Ebibeyin, Supermercado Champions/G.E.</p>
                        </div>
                        <a href="" class="nav-link">
                            <div class="cadaCont d-flex mb-3 ps-3 pt-2">
                                <i class="fa-regular fa-envelope fs-5 pt-1 pe-3"></i>
                                <p>  bokuymangue@gmail.com</p>
                            </div>
                        </a>
                            
                        <a href="" class="nav-link">
                            <div class="cadaCont d-flex mb-2 ps-3 pt-2">
                                <i class="fa-solid fa-phone fs-5 pt-1 pe-3"></i>
                                <p> +240 555 777 442</p>
                            </div>
                        </a>
                    </div>
                    <hr class="">
                    <!--  redes sociales-->
                    <h6 class="ps-3 pb-3 pt-3 text-dark">Contacta con nosotros:</h6>
                    <div class="d-flex redes pb-4">
                                
                        <a href="#" class=" mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class=" mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class=" mr-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class=""><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class=""> <i class="fa-brands fa-whatsapp"></i> </a>
                    </div>
            </div>
                <!-- Caja formulario -->
            <div class="formulario px-3 py-5 bg-info">
                <div class="formu">
                    <p class=" text-center pb-5">Ponte en contacto con nosotros <br>
                        <span class="">No dudes en escribirnos unas líneas a continuación: </span> 
                    </p>
                    <form action="">
                        <div class="d-flex gap-2">
                            <input class="form-control" type="text" placeholder="Nombre Completo" >
                            <input class="form-control" type="email" placeholder="Correo" >
                        </div>
                        <input class="form-control mt-3" type="text" placeholder="Asunto:">
                        <textarea class="form-control mt-3" name="" id="" style="height: 100px; resize:none;" placeholder="Mensaje:"></textarea>
                        <div class="btnEnviar">
                            <input type="submit" class="btn mt-3" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
    </div>




    <!-- FOOTER -->
     <div class="emf">
       <?php
        require("./footer.php")
       ?>
     </div>
</body>
</html>