<?php
include("../model/sql.php");

if (isset($_POST["enviar"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $resultado = $num1+$num2;
    Sumar::sumar($num1,$num2,$resultado);
    echo("EL RESULTADO ES ".$resultado);
} else {
    echo("Error");
}


?>