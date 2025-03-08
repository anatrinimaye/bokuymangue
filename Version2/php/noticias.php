
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarNocticias = " SELECT * FROM noticias";

$resultMostrar = $conex -> query($mostrarNocticias);

$almacenarNoticias = [];
while($noticia = $resultMostrar->fetch_assoc())$almacenarNoticias[]=$noticia;
echo json_encode($almacenarNoticias);

?>