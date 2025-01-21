<?php
$conec = new mysqli("127.0.0.1","root","","BM");

if($conec -> connect_errno){
    echo "No se puede conectar al servidor " .$conec -> connect_error;
}
else{
    //echo "CONEXION EXITOSA";
}
$cerrarConexion= $conec -> close();
// if($cerrarConexion){
//     echo "<br> CONEXION CERRADA ";
// }