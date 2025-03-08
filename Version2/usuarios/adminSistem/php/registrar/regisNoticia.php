
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$titulo = $_POST['titul']; 
$fecha = $_POST['fecha'];
$descripcion = $_POST['descrip']; 
$foto = $_FILES['foto']['name'];


$destino = "../../fotos/imgNoticias/";
$dirTemp = $_FILES['foto']['tmp_name'];

$nombreFoto = explode('.' ,$foto);
$extendFoto = strtolower(end($nombreFoto));
$extendAdmitidas = array('jpg','webp','jpeg','png');

if(in_array($extendFoto, $extendAdmitidas)){
    if(move_uploaded_file($dirTemp, $destino .$foto)){

        $regisProducto = " INSERT INTO noticias (foto,titulo,descripcion,fecha_evento)
        VALUES(?,?,?,?) ";

        $stmInsertar = $conex -> prepare($regisProducto);
        $stmInsertar -> bind_param('ssss',$foto,$titulo,$descripcion,$fecha);
        $stmInsertar -> execute();

        $resultRegistrar = $stmInsertar ->get_result();
        if( $resultRegistrar){
            echo "No se pudo registrar la noticia";
        }
        else{
            echo "Noticia Registrada Exitosamente";
        }

    }else{
        echo "No se pudo subir la foto";
    }
}