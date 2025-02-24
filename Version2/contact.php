
    <style>
        @import url("./css/css.css");
        .cajaContactos{
            background-color:rgb(145, 68, 1);
            justify-content: space-around;
            align-items: center;
            height: 30px;
            
            /* contactos de la izquierda */
            .contacts{
                justify-content: space-between;
                align-items: center;
                span{
                    color: rgb(0, 0, 0);
                    font-size: 14px;
                }
                i{
                    color: white;
                    font-size: 12px
                }
            }
            /* redes de la derecha y el login */
            .redesYlog{
                justify-content: space-around;
                align-items: center;
                /* redes */
                .redes{
                    justify-content: space-between;
                    a{
                        color: rgb(255, 255, 255);
                        font-size: 13px;
                    }
                }
            }
            
        }
    </style>

    <!-- Contactos antes del header -->
    <div class=" d-flex cajaContactos">
        <!-- contactos de la izquierda -->
        <div class="d-flex contacts col-lg-3">
            <a class="nav-link" href=""><i class="fa-solid fa-phone"></i> <span>+240 222 319 976</span></a>
            <a class="nav-link" href=""><i class="fa-solid fa-envelope"></i> <span>bokuymangue@gmail.com</span></a>
        </div>
        <!-- redes de la derecha y el login -->
        <div class="d-flex redesYlog col-lg-4 ">
            <!-- redes -->
            <div class="redes col-lg-7 d-flex">
                <a class="" href=""> <i class="fa-brands fa-linkedin-in p-2"></i></a>
                <a class="" href=""> <i class="fa-brands fa-facebook p-2"></i> </a>
                <a class="" href=""> <i class="fa-brands fa-instagram p-2"></i></a>
                <a class="" href=""> <i class="fa-brands fa-tiktok p-2"></i></a>
            </div>
        </div>
        <!-- login -->
        <div class="login text-center">
                    <!-- Boton para el modal -->
               <a class="nav-link" href="./usuarios/index.php">
               <i class="fa-solid fa-circle-user text-secondary fs-5"></i>
               </a>

            </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>