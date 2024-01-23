<?php

include("conexion.php");

$num1  = $_POST["num1"];
$num2 = $_POST["num2"];
$resultado = $num1 + $num2;

$sql = "INSERT INTO sumas VALUES($num1,$num2,$resultado)";

$resultado =  $con->query($sql);

if ($resultado) {
    echo "EL RESULTADO ES " . $resultado;
} else {
    echo "Error al ejecutar la consulta: " . $con->error;
}
