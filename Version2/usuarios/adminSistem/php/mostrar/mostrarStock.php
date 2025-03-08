
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarStock = " SELECT s.fecha_registro, s.stock, s.stock_minimo,
p.foto as fotoProd, p.nombre as nomProd FROM stock s INNER JOIN productos p ON s.cod_producto = p.cod_producto";

$resultMostrar = $conex -> query($mostrarStock);

$almacenarStock = [];
while($stock = $resultMostrar->fetch_assoc())$almacenarStock[]=$stock;
echo json_encode($almacenarStock);

?>