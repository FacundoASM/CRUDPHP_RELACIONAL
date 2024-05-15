<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white">Editar productos</h1>
    </div>
    <br>






    <form class="container">

        <?php
        include('../config/conexion.php');
        $sql = "SELECT * FROM productos WHERE idProducto =" . $_GET['id'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <label class="form-label">Categoria</label>
        <select class="form-select mb-3">
            <option selected disabled>--Seleccionar Categoría--</option>

            <?php
            include ("../config/conexion.php");

            $sql1 = "SELECT * FROM categoria WHERE id =" . $row['categoriaId'];
            $resultado1 = $conexion->query($sql1);

            $row1 = $resultado1->fetch_assoc();
            echo "<option selected value='" . $row1['id'] . "'>" . $row1['nombreCategoria'] . "</option>";
            
            $sql2 = "SELECT * FROM categoria ";
            $resultado2 = $conexion -> query($sql2);

            while ($fila = $resultado2 -> fetch_array()) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombreCategoria'] . "</option>";
            }
            
            ?>
        </select>

        <label class="form-label">Marca</label>
        <select class="form-select mb-3">
            <option selected disabled>--Seleccionar Marca--</option>

            <?php
            include ("../config/conexion.php");

            $sql1 = "SELECT * FROM marcas WHERE id =" . $row['marcaId'];
            $resultado1 = $conexion->query($sql1);

            $row1 = $resultado1->fetch_assoc();
            echo "<option selected value='" . $row1['id'] . "'>" . $row1['nombreMarca'] . "</option>";
            
            $sql2 = "SELECT * FROM marcas ";
            $resultado2 = $conexion -> query($sql2);

            while ($fila = $resultado2 -> fetch_array()) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombreMarca'] . "</option>";
            }
            
            ?>
        </select>





        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input class="form-control" name="precio" value="<?php echo $row['precio'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <input class="form-control" name="descripcion" value="<?php echo $row['descripcionProducto'] ?>">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>">
            </div>

            <br>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="../index.php" class="btn btn-dark">Regresar</a>
            </div>

    </form>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>