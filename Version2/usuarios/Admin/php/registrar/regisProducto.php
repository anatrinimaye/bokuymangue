
<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


$nombre = $_POST['nom']; 
$precio = $_POST['precio'];
$categoria = $_POST['cate']; 
$foto = $_FILES['foto']['name'];
$estado = "En Venta";

$destino = "../../fotos/";
$dirTemp = $_FILES['foto']['tmp_name'];

$nombreFoto = explode('.' ,$foto);
$extendFoto = strtolower(end($nombreFoto));
$extendAdmitidas = array('jpg','webp','jpeg','png');

if(in_array($extendFoto, $extendAdmitidas)){
    if(move_uploaded_file($dirTemp, $destino .$foto)){

        $regisProducto = " INSERT INTO productos (foto,nombre,precio,estado,cod_categoria)
        VALUES(?,?,?,?,?) ";

        $stmInsertar = $conex -> prepare($regisProducto);
        $stmInsertar -> bind_param('ssdsi',$foto,$nombre,$precio,$estado,$categoria);
        $stmInsertar -> execute();

        $resultRegistrar = $stmInsertar ->get_result();
        if( $resultRegistrar){
            echo "No se pudo Registrar el producto";
        }
        else{
            echo "Producto Registrado Exitosamente";
        }

    }else{
        echo "No se pudo subir la foto";
    }
}
