<?php

function conectar(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "prueba_php";
    $port = 3307;

    $con = mysqli_connect($host, $user, $password, $db, $port);

    return $con;
}

?>