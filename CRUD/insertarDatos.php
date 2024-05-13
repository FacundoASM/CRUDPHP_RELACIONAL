<?php

include("../config/conexion.php");

$categoria = $_POST['categoriaP'];
$marca = $_POST['marcaP'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(categoriaId, marcaId, precio, descripcionProducto, nombre) VALUES
('$categoria','$marca','$nombre','$descripcion','$cantidad','$precio')";

$resultado= mysqli_query($conexion, $sql);

if($resultado === true){
    header("location:../index.php");
}else{
    echo"Datos NO insertados";
}





?>