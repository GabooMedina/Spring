<?php


    $host = "localhost";
    $user = "root";
    $psw = "";
    $bd="mercado";
    
    $con = mysqli_connect($host,$user,$psw,$bd);
    
    if (!$con) {
        die("ERROR".mysqli_connect_error());
    } else {
        
    }



?>