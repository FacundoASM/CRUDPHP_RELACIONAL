<?php

$host = "localhost";
$user = "root";
$pass = "Senda207gti@"; 
$db = "ecomerce";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_errno){
    echo "Conexión fallida: " . $conexion->connect_error;
}

?>
