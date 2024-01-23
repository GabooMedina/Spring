<?php
include("conexion.php");

// Verificar si se envió el formulario para inserción o edición
if (isset($_POST["btnRegistro"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["direccion"]) && !empty($_POST["telefono"])) {
        // Si se envió el formulario para inserción
        if ($_POST["btnRegistro"] === "insertar") {
            // Realizar la inserción
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            $sql = "INSERT INTO estudiante VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$telefono')";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success">Registro Correcto</div>';
            } else {
                echo '<div class="alert alert-danger">Error en el Registro</div>';
            }
        } elseif ($_POST["btnRegistro"] === "editar") {
            // Si se envió el formulario para edición
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            // Realizar la actualización
            $sql = "UPDATE estudiante SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE cedula = '$cedula'";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success">Registro Actualizado</div>';
            } else {
                echo '<div class="alert alert-danger">Error al Actualizar el Registro</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning">Campos Vacíos</div>';
    }
}
?>
