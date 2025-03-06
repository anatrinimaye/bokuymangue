
let ModalInsertar= new bootstrap.Modal(document.getElementById("modalinsert"));
let formulario= document.getElementById("formProveedor");



// REGISTRAR EMPLEADOS
formulario.addEventListener("submit",function (e) {
    e.preventDefault();

    let objFormData = new FormData(formulario);
    let objRequest= new XMLHttpRequest();

    objRequest.open("POST", "../php/registrar/regisProvedor.php");
    objRequest.onreadystatechange = function () {
        if(objRequest.readyState === 4 && objRequest.status === 200){
            
            // NOMBRE
             if(objFormData.get('nom') == ""){
                let errorNombre = document.getElementById("errorNombre");
                errorNombre.style.display= "block";
                errorNombre.innerHTML="Ingrese el nombre del Proveedor";
                document.getElementById("nom").focus();
                setInterval (function(){
                    errorNombre.style.display="none";
                }, 5000);
            }
            // DIRRECION
            else if(objFormData.get('direccion') == ""){
                let errorDireccion = document.getElementById("errorDireccion");
                errorDireccion.style.display= "block";
                errorDireccion.innerHTML="Ingrese la direccion del Proveedor";
                document.getElementById("direccion").focus();
                setInterval (function(){
                    errorDireccion.style.display="none";
                }, 5000);
            }

            // CORREO
            else if(objFormData.get('correo') == ""){
                let errorCorreo = document.getElementById("errorCorreo");
                errorCorreo.style.display= "block";
                errorCorreo.innerHTML="Ingrese el correo del Proveedor";
                document.getElementById("correo").focus();
                setInterval (function(){
                    errorCorreo.style.display="none";
                }, 5000);
            }
             // TELEFONO
             else if(objFormData.get('tel') == ""){
                let errorTelefono = document.getElementById("errorTel");
                errorTelefono.style.display= "block";
                errorTelefono.innerHTML="Ingrese el telefono del Proveedor";
                document.getElementById("tel").focus();
                setInterval (function(){
                    errorTelefono.style.display="none";
                }, 5000);
            }
            // FECHA DE INICIO
              else if(objFormData.get('inicio') == ""){
                let errorInicio = document.getElementById("errorInicio");
                errorInicio.style.display= "block";
                errorInicio.innerHTML="Ingrese la fecha de Inicio del Contrato";
                document.getElementById("inicio").focus();
                setInterval (function(){
                    errorInicio.style.display="none";
                }, 5000);
            }
            // FECHA DE FIN
            else if(objFormData.get('fin') == ""){
                let errorFin = document.getElementById("errorFin");
                errorFin.style.display= "block";
                errorFin.innerHTML="Ingrese la fecha de finalizacion del Contrato";
                document.getElementById("fin").focus();
                setInterval (function(){
                    errorFin.style.display="none";
                }, 5000);
            }
            else{
                Swal.fire({
                    title:"Se ha registrado al Proveedor " +objFormData.get('nom'),
                    icon:"success",
                    draggable: true
                });
                formulario.reset();
                ModalInsertar.hide();
                setInterval (function(){
                    location.reload();
                }, 2000);
                }
            }
            
        }
    
    objRequest.send(objFormData);
    
});


// MOSTRAR LOS DATOS EN LA TABLA

function mostrarProveedor(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","../php/mostrar/mostrarProveedor.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.responseText);
        console.log(respuesta);
        

        let tablaProveedor = document.getElementById("tablaProveedor");
        tablaProveedor.innerHTML='';

        respuesta.forEach(proveedor => {
            tablaProveedor.innerHTML +=`

            <tr>
                <td> ${proveedor.nombre} </td>
                <td> ${proveedor.direccion} </td>
                <td> ${proveedor.correo} </td>
                <td> ${proveedor.telefono}</td>
                <td> ${proveedor.fecha_inicio} </td>
                <td> ${proveedor.fecha_fin} </td>
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
mostrarProveedor();