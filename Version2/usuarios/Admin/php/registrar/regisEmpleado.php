
<?php

require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 




    $nombre = $_POST['nom']; 
    $apellidos = $_POST['apel'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha']; 
    $rol = $_POST['rol']; 
    $estado = 'Activo';
    $salario = $_POST['salario'];
    $foto = $_FILES['foto']['name'];

    $destino = "../../fotos/";
    $dirTemp = $_FILES['foto']['tmp_name'];

    $nombreFoto = explode('.' ,$foto);
    $extendFoto = strtolower(end($nombreFoto));
    $extendAdmitidas = array('jpg','webp','jpeg','png');

    if(in_array($extendFoto, $extendAdmitidas)){
        if(move_uploaded_file($dirTemp, $destino .$foto)){

            $regisEmpleado = " INSERT INTO empleados (foto,nombre,apellidos,correo,fecha_contratacion,estado,salario,cod_rol)
            VALUES(?,?,?,?,?,?,?,?) ";

            $stmInsertar = $conex -> prepare($regisEmpleado);
            $stmInsertar -> bind_param('ssssssdi',$foto,$nombre,$apellidos,$correo,$fecha,$estado,$salario,$rol);
            $stmInsertar -> execute();

            $resultRegistrar = $stmInsertar ->get_result();
            if( $resultRegistrar){
                echo "No se pudo Registrar al empleado";
            }
            else{
                echo "Empleado Registrado Exitosamente";
            }

        }else{
            echo "No se pudo subir la foto";
        }
    }
