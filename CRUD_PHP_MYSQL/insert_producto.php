<?php
include('connection.php');
$con = connection();

$referencia = null;
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$stock = $_POST['stock'];

$sql = "INSERT INTO producto VALUES('$referencia', '$categoria', '$nombre','$stock')";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: index.php");
};

?>