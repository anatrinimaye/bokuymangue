
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarGaleria = " SELECT * FROM productos ORDER BY cod_producto DESC LIMIT 8";

$resultMostrar = $conex -> query($mostrarGaleria);

$almacenarGaleria = [];
while($galeria = $resultMostrar->fetch_assoc())$almacenarGaleria[]=$galeria;
echo json_encode($almacenarGaleria);


?>