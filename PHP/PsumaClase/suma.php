<?php
include("conexion.php");
class Suma{

public static function sumar($num1,$num2,$resultado){

$objeto = new Conexion();
$cn = $objeto->conectar();

$sql = "INSERT INTO sumas VALUES($num1,$num2,$resultado)";

$resultado = $cn->query($sql);

if ($resultado) {
    echo("INGRESADO");
} else {
    echo "Error al ejecutar la consulta: " . $cn->error;
}

    
}

}

?>