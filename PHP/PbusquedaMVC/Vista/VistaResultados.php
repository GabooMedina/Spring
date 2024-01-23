<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
</head>

<body>
    <?php
    if (!empty($resultados)) {
        echo("<table border = '1'>");
        echo("<tr> <th>CODIGO</th> <th>NOMBRE</th> <th>DIRECCION</th> </tr> ");
        foreach ($resultados as $row) {
            echo("<tr>");
            echo("<td>" . $row["codigo"] . "</td>");
            echo("<td>" . $row["nombre"] . "</td>");
            echo("<td>" . $row["direccion"] . "</td>");
            echo("</tr>");
        }
        echo("</table>");
    } else {
        echo("No se encontraron resultados.");
    }
    ?>
</body>

</html>
