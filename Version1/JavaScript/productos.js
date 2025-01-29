
//Llamada de los elemnetos del HTML
let cajaProduct=document.querySelectorAll(".cajaProductos")
let productos=document.getElementById("productos");
let botonCarrito=document.getElementsByClassName("btncar");
let contador=document.querySelector("#contar");
let totalPrecio=document.getElementById("precioTotal")

//Donde se van almacenar los productos
let vacio=[];

const xhr = new XMLHttpRequest();
vacio=xhr.open("GET", "./datosJSON/productos.json"); //Recogida de los elementos de JSON
let datosJSON;

(()=>{

  
  
    xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status== 200){
      datosJSON = JSON.parse(xhr.responseText);
      
      datosJSON.forEach((event) =>{
    
        //Creando la caja general de los articulos
        const producto=document.createElement("div");
        producto.setAttribute("class", "producto");
        productos.appendChild(producto);
        //Añadiendo la imagen
        let imagen = document.createElement("img");
        imagen.setAttribute("src", event.foto);
        producto.appendChild(imagen);
        //Creando la caja que esta debajo de la imagen
        let info=document.createElement("div");
        info.setAttribute("class", "informacion");
        producto.appendChild(info);

        //Creando la caja del nombre y los iconos de estrellas
        let nombre=document.createElement("div");
        nombre.setAttribute("class", "nombre");
        info.appendChild(nombre);
          
        //Introduciendo el nombre y los iconos
        nombre.innerHTML=
        `<h2> ${event.nombre}</h2>
        
        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> `;
        
       
      
        // Creando la caja del precio y el boton de agregar
        let prec=document.createElement("div");
        prec.setAttribute("class", "precio");
        info.appendChild(prec);
        prec.innerHTML=
        ` <p>${event.precio} XFA</p>
        <button href="" class="btncar" id="${event.id}" >Agregar</button>
        `;
      });
      carritito()
    } 

  }
   
  xhr.send();

})();

//CARRITO

function carritito(){
  botonCarrito=document.querySelectorAll(".btncar");
  botonCarrito.forEach((forCar)=>{
    forCar.addEventListener("click", venga);
  })
}
let prodLocal;

if(datosJSON){
  prodLocal=JSON.parse(datosJSON);
  actualizar();
}else{
  prodLocal=[];
}
function venga(exis){
    const alcemarId = exis.currentTarget.id;
    const UnProduc= datosJSON.find(par=>par.id===alcemarId);
    
   if ( prodLocal.some(asomate=>asomate.id===alcemarId)) {

    const idProducto= prodLocal.findIndex(asomate=>asomate.id===alcemarId);
    prodLocal[idProducto].cantidad++;
    
    
   } else {
    UnProduc.cantidad=1;
    prodLocal.push(UnProduc)
    
   }
   actualizarCont();
   localStorage.setItem("productos-ls", JSON.stringify(prodLocal));
  
    
}
//Actualiza el contador naranja del Header
function actualizarCont(){
  let numero=prodLocal.reduce((par1,par2)=>par1+par2.cantidad,0);
  contador.innerText=numero;
}
//Llamada de los productos del carritito

let cajaCarritito=document.querySelector("#cartItem")
let llamadaLS=localStorage.getItem("productos-ls")
let carVacio=document.getElementById("carVacio");
let llamada=JSON.parse(llamadaLS)
let botonEliminar=document.querySelectorAll(".btn1");

//Aparicion de los productos en el carrito
function ejecutarCarritito(){
  
if (llamada && llamada.length > 0) {
  carVacio.classList.add("ocultar");
  llamada.forEach(cansao=>{
    const div = document.createElement("div");
    div.innerHTML=
    `  <div class="cart">
            <div class="Img">
              <img src="${cansao.foto}" alt="" />
            </div>
            <p>${cansao.nombre}</p>
            <p>${cansao.precio} XFA</p>
            <h4 id="canti">${cansao.cantidad}</h4>
            <button id="${cansao.id}" class="btn1">
              <i class="fa-solid fa-trash"></i>
            </button>
       </div> `;
      cajaCarritito.append(div);
  })
  
} else {
  carVacio.classList.remove("ocultar"); //Elimina la etiqueta P que pone: su carrito está vacio
}

  pTotal();
  eliminiarProd()
}
ejecutarCarritito();

//Boton de eliminar los productos en el carrito
function eliminiarProd(){
  botonEliminar=document.querySelectorAll(".btn1");
  botonEliminar.forEach(elim =>{
    elim.addEventListener("click",eliminar);
  });
}
function eliminar(a){
  const idbtnEliminar=a.currentTarget.id;
  const elIndex=llamada.findIndex(a => a.id===idbtnEliminar)
  llamada.splice(elIndex,1);

  ejecutarCarritito();
  localStorage.setItem("productos-ls", JSON.stringify(llamada));
  window.location.reload();
}
function pTotal(){
  const total=llamada.reduce((acc,b)=>acc+(b.precio * b.cantidad),0);
  totalPrecio.innerText=` ${total} XFA`
}