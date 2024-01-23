<?php

class Factorial
{

    public static function calcular($numero)
    {

        if ($numero < 0) {
            echo "EL NUMERO DEBE SER MAYOR QUE 0";
        } else if ($numero == 0 || $numero == 1) {
            return 1;
        } else {

            $resultado = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $resultado *= $i;
            }

            echo ("EL RESULTADO DEL FACTORIAL INGRESADO ES :" . $resultado);
        }
    }
}
