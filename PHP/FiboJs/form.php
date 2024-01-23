<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

INGRESE EL NUMERO PARA LA SUCESION FIBONACCI <br>
<input type="number" id="tamanio" name="tamanio">
<input type="submit" value="ENVIAR">

</form>

<?php

include("fibo.php");
if (isset($_POST["tamanio"])) {
    $tamanio = $_POST["tamanio"];
    Fibonacci::calcular($tamanio);
}

?>


</body>
</html>l