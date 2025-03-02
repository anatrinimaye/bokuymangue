
<?php

require("../../../conexion/conex.php");

$nombre = $_POST['nom'];
$apellidos= $_POST['apel'];
$correo= $_POST['tel'];
$tipo=
$salario=
$estado=
$fecha_contrato= $_POST['fecha'];
$foto= $_FILES['foto']['name'];

$destino="../../fotos/";
$dirTemp = $_FILES['foto']['tmp_name'];
$nomFoto = explode('.', $foto);
$extenFoto = strtolower(end($nomFoto));
$extAdmitidas = array('jpg','png','jpeg');



if(in_array($extenFoto, $extAdmitidas)){
    if(move_uploaded_file($dirTemp, $destino .$foto)){
        
        $regisEmpleado = " INSERT INTO empleados (foto,nombre,apellidos,correo,tipo,fecha_contratacion,estado,salario,cod_rol)
        VALUES(?,?,?,?,?,?,?,?,?)";

        $stmtInsertar=$conn ->prepare($regisEmpleado);
        $stmtInsertar ->bind_param('sssssssii',
        $nombre,$apellido,$edad,$telefono,$profesion,$foto);
        $stmtInsertar -> execute();

        $resultRegistro= $stmtInsertar->get_result();

        if($resultRegistro){
            echo "Empleados No Registrado";
        }else{
            echo "Empleado Registrado Exitosamente";
        }
    }
}