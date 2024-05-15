<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white">Agregar productos</h1>
    </div>
    <br>
    <div class="container">

        <form action="../CRUD/insertarDatos.php" method="POST">
            <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" name="categoriaP">
                <option selected disabled>--Seleccionar Categoría--</option>
                <?php
                    include("../config/conexion.php");
                    $sql=$conexion -> query("SELECT * FROM categoria");
                    while($resultado=$sql->fetch_assoc()){
                        echo "<option value= '".$resultado['id']."'>".$resultado['nombreCategoria']."</option>";
                    }
                ?>
            </div>
            </select>
            
            <div class="mb-3">
            <label class="form-label">Marca</label>
            <select class="form-select" name="marcaP">
                <option selected disabled>--Seleccionar Marca--</option>
                <?php
                    include("../config/conexion.php");
                    $sql=$conexion -> query("SELECT * FROM marcas");
                    while($resultado=$sql->fetch_assoc()){
                        echo "<option value= '".$resultado['id']."'>".$resultado['nombreMarca']."</option>";
                    }
                ?>
            </div>
            </select>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <input class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input class="form-control" name="precio">
            </div>
            
            <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
            </div>   
        </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>