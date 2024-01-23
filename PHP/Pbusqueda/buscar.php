<?php

include("conexion.php");

class Buscar{

public static function busqueda($cedula){

$objeto = new Conexion();
$cn = $objeto->conectar();

$sql = "SELECT * FROM estudiantes WHERE id_est ='$cedula' ";

$resultado = $cn->query($sql);

while ($row = $resultado->fetch_array()) {

    echo("<table border='1' >");
    echo("<tr><th> CEDULA </th><th> NOMBRE </th> <th> APELLIDO </th><th>CURSO PERTENECE </th></tr>");
    echo("<td>".$row["id_est"]."</td>");
    echo("<td>".$row["nom_est"]."</td>");
    echo("<td>".$row["ape_est"]."</td>");
    echo("<td>".$row["id_cur_per"]."</td>");
    echo("</table>");

}


}

}


?>