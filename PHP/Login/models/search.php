<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

    INGRESE CEDULA DEL ESTUDIANTE <br>
    <input type="text" id="valor" name="valor">
    <input type="submit" name="buscar" id="buscar" value="BUSCAR">
   
    </form>
    <p>
        ******************************************************************************************************
    </p>
    <br>
    <?php
    if (isset($_POST["buscar"])) {
        $buscar=$_POST["valor"];
        $sql ="SELECT * from estudiante WHERE cedula = '$buscar'";
        $resultado=$conn->query($sql);
        while ($row=$resultado->fetch_array()) {
            echo"<table border='1'>";
            echo"<tr> <th>CEDULA</th>  <th>NOMBRE</th>  <th>APELLIDO</th>  <th>DIRECCION</th>  <th>TELEFONO</th>  </tr>";
            echo"<td>".$row["cedula"]."</td>";
            echo"<td>".$row["nombre"]."</td>";
            echo"<td>".$row["apellido"]."</td>";
            echo"<td>".$row["direccion"]."</td>";
            echo"<td>".$row["telefono"]."</td>";
            echo"</table>";
        }
    }
    ?>


</body>
</html>