

<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarCategorias = " SELECT * FROM categoria";

$resultMostrar = $conex -> query($mostrarCategorias);

$almacenarCategoria = [];
while($categoria = $resultMostrar->fetch_assoc())$almacenarCategoria[]=$categoria;
echo json_encode($almacenarCategoria);


?>