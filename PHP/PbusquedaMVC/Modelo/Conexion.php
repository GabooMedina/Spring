<?php

class Conexion
{
    public function conectar()
    {
        $server = "localhost";
        $user = "root";
        $psw = "";
        $bd = "repasos";

        $con = mysqli_connect($server, $user, $psw, $bd);

        if (!$con) {
            die("ERROR" . mysqli_connect_error());
        } else {
            return $con;
        }
    }
}
?>
