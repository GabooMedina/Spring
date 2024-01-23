<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
INGRESE EL NUMERO PARA OBTENER SU FACTORIAL <br>
<input type="text" id="numero" name="numero"> <br>
<input type="submit" value="ENVIAR">
</form>

<?php
include("facto.php");
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    Factorial::calcular($numero);
}
?>

</body>
</html>