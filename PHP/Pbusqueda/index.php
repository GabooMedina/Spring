<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        INGRESE EL ID DEL ESTUDIANTE <input type="text" name="cedula" id="cedula"> <br>
        <input type="submit" value="ENVIAR">

    </form>

<?php
include("buscar.php");
    if (isset($_POST["cedula"])) {
        $cedula = $_POST["cedula"]; 
        echo("<br>"); echo("<br>");
        Buscar::busqueda($cedula);
    }
?>

</body>
</html>