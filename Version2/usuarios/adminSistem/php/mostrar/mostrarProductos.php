
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarProductos = " SELECT p.foto, p.nombre, p.precio, p.estado, 
c.nombre as nomCategoria FROM productos p INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria";

$resultMostrar = $conex -> query($mostrarProductos);

$almacenarProductos = [];
while($producto = $resultMostrar->fetch_assoc())$almacenarProductos[]=$producto;
echo json_encode($almacenarProductos);

?>