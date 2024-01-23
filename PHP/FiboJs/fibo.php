<?php

class Fibonacci{

public static function calcular($tamanio){

if ($tamanio>0) {
    
    $fibonacci=[0,1];

    for ($i = 2; $i < $tamanio; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Imprimir la sucesión de Fibonacci
    for ($i = 0; $i < count($fibonacci); $i++) {
        echo $fibonacci[$i] . " ";
    }
    

}

}

}

?>