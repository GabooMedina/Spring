<?php
include 'conexion.php';
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sqlInsertar="INSERT INTO estudiante(cedula,nombre,apellido,direccion,telefono)
VALUES('$cedula','$nombre','$apellido','$direccion','$telefono')";
if($conn->query($sqlInsertar)==TRUE){
    echo json_encode(("Se inserto el Estudiante"));
}else{
    
}
$conn->close();
?>

