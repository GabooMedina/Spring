<?php
include("conexion.php");
class Sumar{

public static function sumar($num1,$num2,$resultado){

$objeto = new Conexion();
$con = $objeto->conectar();

$sql = "INSERT INTO sumas VALUES($num1,$num2,$resultado)";

$resultado = $con->query($sql);

}

}

?>