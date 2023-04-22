<?php
include('connection.php');
$con = connection();

$sql = "SELECT * FROM `producto` ORDER BY categoria ASC";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>CRUD ACEITERA</title>
</head>
<body>

    <!--div para ingresar productos e indicar a que categoria pertence-->
    <Div class= "productosa" >
        <form action="insert_producto.php" method = "POST">
            <h1>Agregación de Producto</h1>
            <input type="text" name="categoria" placeholder="Categoria">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="stock" placeholder="stock">
            <input type="submit" value="Agregar Producto">

        </form>
    </Div>

    <!--div para mostrar la entidad proveniente de la bases de datos en pantalla-->
    <div class = "tabla">   
        <h2>Productos Registrados</h2>
        <table> 
            <thead>
                <tr>
                    <th>Referencia</th>
                    <th>Categoria</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

    <!--esta etiqueta php usa el ciclo while para imprimir todos los datos hasta no encuentre mas
        las imprime en la etiqueta th -->
                <?php while($row = mysqli_fetch_array($query)): ?>
              
                <tr>
                    <th><?= $row['referencia'] ?> </th>
                    <th><?=$row['categoria'] ?></th>
                    <th><?=$row['nombre']?></th>
                    <th><?=$row['stock']?></th>
 
                    <th><a href="actualizar_producto.php?referencia=<?= $row['referencia'] ?>" class="btn_editar">Editar</a></th>
                    <th><a href="eleminar_producto.php?referencia= <?= $row['referencia'] ?>" class="btn_eliminar">Eliminar</a></th>
                    
                </tr> 
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>
</body>
</html>