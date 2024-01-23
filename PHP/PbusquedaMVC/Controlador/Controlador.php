<?php
include("../Modelo/BuscarModelo.php");

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $resultados = BuscarModelo::buscarProducto($nombre);
    include("../Vista/VistaResultados.php");
}
?>
