<?php
include 'conexion.php';

if (!empty($_GET["cedula"])) {
    $cedula = $_GET["cedula"];
    $sql = "DELETE FROM estudiante WHERE cedula = '$cedula'";
    if ($conn->query($sql) === TRUE && $conn->affected_rows > 0) {
        echo '<div class="alert alert-success">Registro Eliminado</div>';
    } else {
        //echo '<div class="alert alert-danger">Error al eliminar el registro</div>';
    }
} else {
    // echo '<div class="alert alert-warning">No se proporcionó una cédula para eliminar</div>';
}
?>
