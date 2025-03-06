<?php
require $_SERVER['DOCUMENT_ROOT'] ."/BOKUY-MANGUE/Version2/usuarios/conexion/conex.php"; 

// $mostrarEmpleados = " SELECT * from empleados";

$mostrarEmpleados = " SELECT e.foto, e.nombre, e.apellidos, e.correo, e.fecha_contratacion, e.estado, e.salario,
r.nombre as nomRol FROM empleados e INNER JOIN rol r ON r.cod_rol = e.cod_rol";

$resultMostrar = $conex -> query($mostrarEmpleados);

$almacenarEmpleados = [];
while($empleado = $resultMostrar->fetch_assoc())$almacenarEmpleados[]=$empleado;
echo json_encode($almacenarEmpleados);

?>