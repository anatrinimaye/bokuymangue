
let modalInsertar = new bootstrap.Modal(document.getElementById("modalinsert"));
let formulario = document.getElementById("formProductos");

formulario.addEventListener("submit", function(e) {
    e.preventDefault();

    let objFormData = new FormData(formulario);
    let objRequest= new XMLHttpRequest();

    objRequest.open("POST", "../php/registrar/regisProducto.php");
    objRequest.onreadystatechange = function () {
        if(objRequest.readyState === 4 && objRequest.status === 200){
            const foto = document.getElementById("foto");
            
            // FOTO
            if(foto.files.length === 0){
                const errorFoto = document.getElementById("errorFoto");
                errorFoto.style.display= "block";
                errorFoto.innerHTML = "Ingrese la foto del producto";
                document.getElementById("foto").focus();
                setInterval (function(){
                    errorFoto.style.display="none";
                }, 5000);
            }
            // NOMBRE
            else if(objFormData.get('nom') == ""){
                let errorNombre = document.getElementById("errorNombre");
                errorNombre.style.display= "block";
                errorNombre.innerHTML="Ingrese el nombre del producto";
                document.getElementById("nom").focus();
                setInterval (function(){
                    errorNombre.style.display="none";
                }, 5000);
            }
            // PRECIO
            else if(objFormData.get('precio') == ""){
                let errorPrecio = document.getElementById("errorPrecio");
                errorPrecio.style.display= "block";
                errorPrecio.innerHTML="Ingrese el precio del producto";
                document.getElementById("precio").focus();
                setInterval (function(){
                    errorPrecio.style.display="none";
                }, 5000);
            }

            // CATEGORIA
            else if(objFormData.get('cate') == ""){
                let errorCategoria = document.getElementById("errorCat");
                errorCategoria.style.display= "block";
                errorCategoria.innerHTML="Ingrese la categoria del producto";
                document.getElementById("cate").focus();
                setInterval (function(){
                    errorCategoria.style.display="none";
                }, 5000);
            }
            else{
                Swal.fire({
                    title:"Se ha registrado el producto " +objFormData.get('nom'),
                    icon:"success",
                    draggable: true
                });
                formulario.reset();
                modalInsertar.hide();
                setInterval (function(){
                    location.reload();
                }, 2000);
                }
            }
            
        }
    
    objRequest.send(objFormData);
    
});


// MOSTRAR LOS DATOS EN LA TABLA DE PRODUCTOS

function mostrarEmpleados(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","../php/mostrar/mostrarProductos.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let tablaProductos = document.getElementById("tablaProductos");
        tablaProductos.innerHTML='';

        respuesta.forEach(producto => {
            tablaProductos.innerHTML +=`

            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../fotos/${producto.foto}" alt="">
                </td>
                <td>${producto.nombre}</td>
                <td>${producto.precio}</td>
                <td>${producto.nomCategoria}</td>
                <td class="text-success fw-bold">${producto.estado}</td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            `;
        });
    });
    objRequest.send();
}
mostrarEmpleados();