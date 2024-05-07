<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud relacional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white" >Listado de productos</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    require("config/conexion.php");

                    $sql=$conexion -> query("SELECT * FROM productos
                        INNER JOIN categoria ON productos.categoriaId = categoria.id
                        INNER JOIN marcas ON productos.marcaId = marcas.id
                    ");

                    while ($resultado = $sql -> fetch_assoc()) {
                
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['idProducto']?></th>
                        <th scope="row"><?php echo $resultado['nombreCategoria']?></th>
                        <th scope="row"><?php echo $resultado['nombreMarca']?></th>
                        <th scope="row"><?php echo $resultado['precio']?></th>
                        <th scope="row"><?php echo $resultado['descripcionProducto']?></th>
                        <th scope="row"><?php echo $resultado['nombre']?></th>
                        <th>
                            <a href="" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php
                    }
            
                



                ?>




            </tbody>
        </table>
        <div class="container">
            <a href="formularios/agregarForm.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>