
    <style>
        @import url("./css/css.css");
        .cajaContactos{
            justify-content: space-around;
            align-items: center;
            
            /* contactos de la izquierda */
            .contacts{
                justify-content: space-between;
                align-items: center;
                span{
                    color: rgb(0, 0, 0);
                    font-size: 14px;
                }
                i{
                    color: blue;
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
                        color: rgb(32, 0, 177);
                        font-size: 15px;
                    }
                }
            }
            /* Login */
        }
    </style>

    <!-- Contactos antes del header -->
    <div class=" d-flex cajaContactos bg-warning">
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
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa-solid fa-user-lock text-secondary"></i>
                </button>

                <!-- Modal de inicio de sesion -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog w-25">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <i class="fa-solid fa-user fs-1 p-3"></i>
                                <form action="">
                                    <input class="form-control mt-4 " placeholder="Correo" name="" type="email">
                                    <input class="form-control mt-4 " placeholder="Password" name="" type="password">
                                    <input class="form-control mt-4 btn btn-primary" value="Acceder" type="submit">
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>