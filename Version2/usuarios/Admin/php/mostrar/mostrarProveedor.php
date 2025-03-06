<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 

$mostrarProveedores = " SELECT * FROM proveedores";


$resultMostrar = $conex -> query($mostrarProveedores);

$almacenarProveedores = [];
while($proveedor = $resultMostrar->fetch_assoc())$almacenarProveedores[]=$proveedor;

echo json_encode($almacenarProveedores);

?>