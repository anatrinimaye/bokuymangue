
let ModalInsertar= new bootstrap.Modal(document.getElementById("modalinsert"));
let formulario= document.getElementById("formStock");



// REGISTRAR EMPLEADOS
formulario.addEventListener("submit",function (e) {
    e.preventDefault();

    let objFormData = new FormData(formulario);
    let objRequest= new XMLHttpRequest();

    objRequest.open("POST", "../php/registrar/regiStock.php");
    objRequest.onreadystatechange = function () {
        if(objRequest.readyState === 4 && objRequest.status === 200){

            // STOCK DISPONIBLE
             if(objFormData.get('stock') == ""){
                let errorStock = document.getElementById("errorStock");
                errorStock.style.display= "block";
                errorStock.innerHTML="Ingrese el Stock Disponible";
                document.getElementById("stock").focus();
                setInterval (function(){
                    errorStock.style.display="none";
                }, 3000);
            }
            
            // STOCK MINIMO
            else if(objFormData.get('stockMin') == ""){
                let errorStockMin = document.getElementById("errorStockMin");
                errorStockMin.style.display= "block";
                errorStockMin.innerHTML="Ingrese el Stock Minimo";
                document.getElementById("stockMin").focus();
                setInterval (function(){
                    errorStockMin.style.display="none";
                }, 5000);
            }

            // PRODUCTO
            else if(objFormData.get('prod') == ""){
                let errorProducto = document.getElementById("errorProducto");
                errorProducto.style.display= "block";
                errorProducto.innerHTML="Ingrese el Producto";
                document.getElementById("prod").focus();
                setInterval (function(){
                    errorProducto.style.display="none";
                }, 5000);
            }
             
            else{
                Swal.fire({
                    title:"Stock Registrado Exitosamente ",
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

// MOSTRAR LOS DATOS EN LA TABLA DEL STOCK

function mostrarStock(){
    let objRequest = new XMLHttpRequest();

    objRequest.open("GET","../php/mostrar/mostrarStock.php", true);
    objRequest.addEventListener("load", ()=> {
        let respuesta = JSON.parse(objRequest.responseText);
        console.log(respuesta);
        

        let tablaStock = document.getElementById("tablaStock");
        tablaStock.innerHTML='';

        respuesta.forEach(stock => {
            tablaStock.innerHTML +=`

            <tr>
                <td>
                    <img class="rounded-pill" style="width:50px; height:50px" src="../fotos/imgProductos/${stock.fotoProd}" alt="">
                </td>
                <td> ${stock.nomProd} </td>
                <td> ${stock.fecha_registro} </td>
                <td> ${stock.stock} </td>
                <td> ${stock.stock_minimo}</td>
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
mostrarStock();