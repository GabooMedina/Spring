<?php
require_once("Conexion.php");

class BuscarModelo
{
    public static function buscarProducto($nombre)
    {
        $objeto = new Conexion();
        $conexion = $objeto->conectar();

        $sql = "SELECT * FROM bodegas WHERE codigo = (SELECT cod_bod_per FROM productos WHERE nombre ='$nombre')";

        $resultado = $conexion->query($sql);

        $resultados = array();
        while ($row = $resultado->fetch_array()) {
            $resultados[] = $row;
        }

        return $resultados;
    }
}
?>
