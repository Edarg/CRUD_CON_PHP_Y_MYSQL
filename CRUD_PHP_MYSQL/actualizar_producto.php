<?php

include('connection.php');
$con = connection();

$ref = $_GET['referencia'];
$sql = "SELECT * FROM producto WHERE referencia='$ref'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>EDITOR DE USUARIOS</title>
</head>

<body>
    <div class = "productosa">
        <form action="editar_producto.php" method="POST">
            
            <h1>Editar Producto</h1>
            <input type="hidden" name="referencia" value = "<?= $row['referencia'] ?>">
            <input type="text" name="categoria" placeholder="Categoria" value="<?= $row['categoria'] ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="stock" placeholder="stock" value = "<?=$row['stock']?>">
            <input type="submit" value="Actualizar Datos">

        </form>
    </div>
    
</body>
</html>