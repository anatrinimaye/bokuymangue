
let ModalInsertar= new bootstrap.Modal(document.getElementById("modalinsert"));
let formulario= document.getElementById("fromulario");



// REGISTRAR EMPLEADOS
formulario.addEventListener("submit",function (e) {
    e.preventDefault();

    let objFormData = new FormData(formulario);
    let objRequest= new XMLHttpRequest();

    objRequest.open("POST", "../php/registrar/regisEmpleado.php");
    objRequest.onreadystatechange = function () {
        if(objRequest.readyState === 4 && objRequest.status === 200){
            const foto = document.getElementById("foto");
            
            // FOTO
            if(foto.files.length === 0){
                const errorFoto = document.getElementById("errorFoto");
                errorFoto.style.display= "block";
                errorFoto.innerHTML = "Ingrese la foto de empleado";
                document.getElementById("foto").focus();
                setInterval (function(){
                    errorFoto.style.display="none";
                }, 5000);
            }
            // NOMBRE
            else if(objFormData.get('nom') == ""){
                let errorNombre = document.getElementById("errorNombre");
                errorNombre.style.display= "block";
                errorNombre.innerHTML="Ingrese el nombre del empleado";
                document.getElementById("nom").focus();
                setInterval (function(){
                    errorNombre.style.display="none";
                }, 5000);
            }
            // APELLIDOS
            else if(objFormData.get('apel') == ""){
                let errorApellido = document.getElementById("errorApellido");
                errorApellido.style.display= "block";
                errorApellido.innerHTML="Ingrese los apellidos del empleado";
                document.getElementById("apel").focus();
                setInterval (function(){
                    errorApellido.style.display="none";
                }, 5000);
            }

            // CORREO
            else if(objFormData.get('correo') == ""){
                let errorTel = document.getElementById("errorCorreo");
                errorTel.style.display= "block";
                errorTel.innerHTML="Ingrese el correo del empleado";
                document.getElementById("correo").focus();
                setInterval (function(){
                    errorTel.style.display="none";
                }, 5000);
            }
            // FECHA DE CONTRATO
              else if(objFormData.get('fecha') == ""){
                let errorFecha = document.getElementById("errorFecha");
                errorFecha.style.display= "block";
                errorFecha.innerHTML="Ingrese la fecha de Contratacion";
                document.getElementById("fecha").focus();
                setInterval (function(){
                    errorFecha.style.display="none";
                }, 5000);
            }
            // SALARIO
            else if(objFormData.get('salario') == ""){
                let errorFecha = document.getElementById("errorsalario");
                errorFecha.style.display= "block";
                errorFecha.innerHTML="Ingrese el salario";
                document.getElementById("salario").focus();
                setInterval (function(){
                    errorFecha.style.display="none";
                }, 5000);
            }
            else{
                Swal.fire({
                    title:"Se ha registrado al usuario " +objFormData.get('nom'),
                    icon:"success",
                    draggable: true
                });
                formulario.reset();
                ModalInsertar.hide();
                // location.reload();
                }
            }
            
        }
    
    objRequest.send(objFormData);
    
});


// MOSTRAR LOS DATOS EN LA TABLA DE EMPLEADOS

function mostrarEmpleados(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","../php/mostrar/mostrarEmpleado.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.responseText);
        console.log(respuesta);
        

        let tablaEmpleados = document.getElementById("tablaEmpleado");
        tablaEmpleados.innerHTML='';

        respuesta.forEach(empleado => {
        tablaEmpleados.innerHTML +=`

            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../fotos/${empleado.foto}" alt="">
                </td>
                <td> ${empleado.nombre} </td>
                <td> ${empleado.apellidos} </td>
                <td> ${empleado.correo} </td>
                <td> ${empleado.fecha_contratacion}</td>
                <td>
                    <p class="text-success fw-bold activa"> ${empleado.estado} </p>
                </td>
                <td> ${empleado.salario} </td>
                <td> ${empleado.nomRol} </td>
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