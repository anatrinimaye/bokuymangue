
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$mostrarUltimasNoticias = "SELECT * FROM noticias ORDER BY cod_noticia DESC LIMIT 8";

$resultMostrar = $conex -> query($mostrarUltimasNoticias);

$almacenarNoticias = [];
while($noticia = $resultMostrar->fetch_assoc())$almacenarNoticias[]=$noticia;
echo json_encode($almacenarNoticias);

?>