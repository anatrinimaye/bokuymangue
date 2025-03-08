
let modalInsertar = new bootstrap.Modal(document.getElementById("modalinsert"));
let formulario = document.getElementById("formNoticia");

formulario.addEventListener("submit", function(e) {
    e.preventDefault();

    let objFormData = new FormData(formulario);
    let objRequest= new XMLHttpRequest();

    objRequest.open("POST", "../php/registrar/regisNoticia.php");
    objRequest.onreadystatechange = function () {
        if(objRequest.readyState === 4 && objRequest.status === 200){
            const foto = document.getElementById("foto");
            const fecha = document.getElementById("fecha");
            
            // FOTO
            if(foto.files.length === 0){
                const errorFoto = document.getElementById("errorFoto");
                errorFoto.style.display= "block";
                errorFoto.innerHTML = "Ingrese la foto de la noticia";
                document.getElementById("foto").focus();
                setInterval (function(){
                    errorFoto.style.display="none";
                }, 5000);
            }
            // TITULO
            else if(objFormData.get('titul') == ""){
                let errorTitulo = document.getElementById("errorTitulo");
                errorTitulo.style.display= "block";
                errorTitulo.innerHTML="Ingrese el titulo de la noticia";
                document.getElementById("titul").focus();
                setInterval (function(){
                    errorTitulo.style.display="none";
                }, 5000);
            }
            // FECHA DEL EVENTO
            else if(fecha.value === ''){
                let errorFecha = document.getElementById("errorFecha");
                errorFecha.style.display= "block";
                errorFecha.innerHTML="Ingrese la fecha de la noticia";
                document.getElementById("fecha").focus();
                setInterval (function(){
                    errorFecha.style.display="none";
                }, 5000);
            }
            // DESCRIPCION
            else if(objFormData.get('descrip') == ""){
                let errorDescrip = document.getElementById("errorDescrip");
                errorDescrip.style.display= "block";
                errorDescrip.innerHTML="Ingrese la descripcion de la noticia";
                document.getElementById("descrip").focus();
                setInterval (function(){
                    errorDescrip.style.display="none";
                }, 5000);
            }
            
            
            else{
                Swal.fire({
                    title:"Se ha registrado la notica con el titulo " +objFormData.get('titul'),
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


// MOSTRAR LOS DATOS EN LA TABLA DE NOTICIAS

function mostrarNoticias(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","../php/mostrar/mostrarNoticias.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.response);
        console.log(respuesta);
        

        let tablaNoticias = document.getElementById("tablaNoticia");
        tablaNoticias.innerHTML='';

        respuesta.forEach(noticia => {
            tablaNoticias.innerHTML +=`

            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../fotos/imgNoticias/${noticia.foto}" alt="">
                </td>
                <td>${noticia.titulo}</td>
                <td id="des">${noticia.descripcion}</td>
                <td>${noticia.fecha_evento}</td>
                
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
mostrarNoticias();