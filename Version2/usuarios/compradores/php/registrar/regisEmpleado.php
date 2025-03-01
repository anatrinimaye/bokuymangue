<?php
require "../../conexion/conex.php";

if(isset($_POST['btnRegistrar'])){
    $destino= "../../fotos/";
    $foto= $_FILES['fot']['name'];
    $dirTemporal= $_FILES['fot']['tmp_name'];

    $nombre= $_POST['nom'];
    $apellidos= $_POST['apel'];
    $telefono= $_POST['tel'];
    $fecha_contrato= $_POST['dia'];
    $cargo= $_POST['cargo'];

    $nombreFoto= explode('.',$foto);
    $extendFoto= strtolower(end($nombreFoto));
    $extendAdmitos= array('jpg','png','jpeg');

    if(in_array($extendFoto,$extendAdmitos)){
        if(move_uploaded_file($dirTemporal, $destino .$foto)){

            $regisEmpleado= "INSERT INTO empleados(foto,nombre,apellidos,telefono,cod_cargo,fecha_contratacion)
            VALUES ()"
        }
    }
}