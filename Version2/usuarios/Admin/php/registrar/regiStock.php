
<?php

require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 

    // $fecha = CURRENT_TIMESTAMP;
    $stock = $_POST['stock'];
    $stockMin = $_POST['stockMin']; 
    $cod_Producto = $_POST['prod']; 

            $regisStock = " INSERT INTO stock (stock,stock_minimo,cod_producto)
            VALUES(?,?,?) ";

            $stmInsertar = $conex -> prepare($regisStock);
            $stmInsertar -> bind_param('iii' ,$stock,$stockMin,$cod_Producto);
            $stmInsertar -> execute();

            $resultRegistrar = $stmInsertar ->get_result();
            if( $resultRegistrar){
                echo "No se pudo Registrar al Proveedor";
            }
            else{
                echo "Proveedor Registrado Exitosamente";
            }
 
 $conex -> close(); 