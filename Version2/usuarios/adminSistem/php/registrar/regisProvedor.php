
<?php

require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 


    $nombre = $_POST['nom']; 
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $fecha_inicio = $_POST['inicio']; 
    $telefono = $_POST['tel']; 
    $fecha_fin = $_POST['fin'];

            $regisProveedor = " INSERT INTO proveedores (nombre,direccion,correo,telefono,fecha_inicio,fecha_fin)
            VALUES(?,?,?,?,?,?) ";

            $stmInsertar = $conex -> prepare($regisProveedor);
            $stmInsertar -> bind_param('ssssss', $nombre,$direccion,$correo,$telefono,$fecha_inicio,$fecha_fin);
            $stmInsertar -> execute();

            $resultRegistrar = $stmInsertar ->get_result();
            if( $resultRegistrar){
                echo "No se pudo Registrar al Proveedor";
            }
            else{
                echo "Proveedor Registrado Exitosamente";
            }
 
 $conex -> close();        
    