<?php

include("../config/conexion.php");

$categoria = $_POST['categoriaP'];
$marca = $_POST['marcaP'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(categoriaId, marcaId ,nombre, precio, descripcionProducto) VALUES
('$categoria','$marca','$nombre','$precio','$descripcion');";

$resultado= mysqli_query($conexion, $sql);

if($resultado === true){
    header("location:../index.php");
}else{
    echo"Datos NO insertados";
}

?>