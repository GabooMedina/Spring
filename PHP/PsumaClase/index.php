<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">

        INGRESE EL NUMERO 1: <input type="number" name="num1" id="num1"> <br>
        INGRESE EL NUMERO 2: <input type="number" name="num2" id="num2"> <br>

        <input type="submit" name="enviar" id="enviar" value="SUMAR">

    </form>

    <?php
    include("suma.php");

    if (isset($_POST["enviar"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $resultado = $num1 + $num2;

        Suma::sumar($num1, $num2, $resultado); 
        echo("<br> EL RESULTADO ES :".$resultado);
    }

    ?>

</body>

</html>