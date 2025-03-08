


// MOSTRAR LOS DATOS EN LA TABLA DE PRODUCTOS

function totalProductos(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/totalProductos.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaProductos = document.getElementById("cajaProductos");
        cajaProductos.innerHTML='';

        respuesta.forEach(producto => {
            cajaProductos.innerHTML +=`

            <div class="card producto" style="width: 14rem; ">
                <img src="./usuarios/adminSistem/fotos/imgProductos/${producto.foto}" style="height: 190px" class="card-img-top" alt="...">
                <!-- Nombre geneal despues de la imagen -->
                <div class="card-body">
                <!-- Nombre y precio -->
                <div class="d-flex nombreYprecio">
                    <p class="nomb">${producto.nombre}</p>
                    <p class="prec">${producto.precio} XFA</p>
                </div>
                <!-- Tipo de producto y Buton de agregar al carrito -->
                <div class="d-flex btnYtipo">
                    <p class=""> ${producto.nomCategoria} </p>
                    <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
                    <i class="fa-solid fa-plus"></i> 
                    </button>
                </div>
                </div>
            </div>
            `;
        });
    });
    objRequest.send();
}
totalProductos();


// CITRICOS
function Citricos(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/citricos.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaProductos = document.getElementById("cajaProductos");
        cajaProductos.innerHTML='';

        respuesta.forEach(producto => {
            cajaProductos.innerHTML +=`

            <div class="card producto" style="width: 14rem; ">
                <img src="./usuarios/adminSistem/fotos/imgProductos/${producto.foto}" style="height: 190px" class="card-img-top" alt="...">
                <!-- Nombre geneal despues de la imagen -->
                <div class="card-body">
                <!-- Nombre y precio -->
                <div class="d-flex nombreYprecio">
                    <p class="nomb">${producto.nombre}</p>
                    <p class="prec">${producto.precio} XFA</p>
                </div>
                <!-- Tipo de producto y Buton de agregar al carrito -->
                <div class="d-flex btnYtipo">
                    <p class=""> ${producto.nomCategoria} </p>
                    <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
                    <i class="fa-solid fa-plus"></i> 
                    </button>
                </div>
                </div>
            </div>
            `;
        });
    });
    objRequest.send();
}

// POMACEAS
function Pomaceas(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/pomaceas.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaProductos = document.getElementById("cajaProductos");
        cajaProductos.innerHTML='';

        respuesta.forEach(producto => {
            cajaProductos.innerHTML +=`

            <div class="card producto" style="width: 14rem; ">
                <img src="./usuarios/adminSistem/fotos/imgProductos/${producto.foto}" style="height: 190px" class="card-img-top" alt="...">
                <!-- Nombre geneal despues de la imagen -->
                <div class="card-body">
                <!-- Nombre y precio -->
                <div class="d-flex nombreYprecio">
                    <p class="nomb">${producto.nombre}</p>
                    <p class="prec">${producto.precio} XFA</p>
                </div>
                <!-- Tipo de producto y Buton de agregar al carrito -->
                <div class="d-flex btnYtipo">
                    <p class=""> ${producto.nomCategoria} </p>
                    <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
                    <i class="fa-solid fa-plus"></i> 
                    </button>
                </div>
                </div>
            </div>
            `;
        });
    });
    objRequest.send();
}


// TROPICALES
function Tropicales(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/tropicales.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaProductos = document.getElementById("cajaProductos");
        cajaProductos.innerHTML='';

        respuesta.forEach(producto => {
            cajaProductos.innerHTML +=`

            <div class="card producto" style="width: 14rem; ">
                <img src="./usuarios/adminSistem/fotos/imgProductos/${producto.foto}" style="height: 190px" class="card-img-top" alt="...">
                <!-- Nombre geneal despues de la imagen -->
                <div class="card-body">
                <!-- Nombre y precio -->
                <div class="d-flex nombreYprecio">
                    <p class="nomb">${producto.nombre}</p>
                    <p class="prec">${producto.precio} XFA</p>
                </div>
                <!-- Tipo de producto y Buton de agregar al carrito -->
                <div class="d-flex btnYtipo">
                    <p class=""> ${producto.nomCategoria} </p>
                    <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
                    <i class="fa-solid fa-plus"></i> 
                    </button>
                </div>
                </div>
            </div>
            `;
        });
    });
    objRequest.send();
}

// TROPICALES
function deHuseo(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","./php/deHueso.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let cajaProductos = document.getElementById("cajaProductos");
        cajaProductos.innerHTML='';

        respuesta.forEach(producto => {
            cajaProductos.innerHTML +=`

            <div class="card producto" style="width: 14rem; ">
                <img src="./usuarios/adminSistem/fotos/imgProductos/${producto.foto}" style="height: 190px" class="card-img-top" alt="...">
                <!-- Nombre geneal despues de la imagen -->
                <div class="card-body">
                <!-- Nombre y precio -->
                <div class="d-flex nombreYprecio">
                    <p class="nomb">${producto.nombre}</p>
                    <p class="prec">${producto.precio} XFA</p>
                </div>
                <!-- Tipo de producto y Buton de agregar al carrito -->
                <div class="d-flex btnYtipo">
                    <p class=""> ${producto.nomCategoria} </p>
                    <button class="btn btn-primary btnAgregar py-0 mb-3" id="btnAgregar"> 
                    <i class="fa-solid fa-plus"></i> 
                    </button>
                </div>
                </div>
            </div>
            `;
        });
    });
    objRequest.send();
}
