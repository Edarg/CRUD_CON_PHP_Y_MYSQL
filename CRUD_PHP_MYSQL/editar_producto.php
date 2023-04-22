<?php
include('connection.php');
$con = connection();

$referencia = $_POST["referencia"];
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$stock = $_POST['stock'];

$sql = "UPDATE producto SET categoria='$categoria', nombre='$nombre', stock = '$stock' WHERE referencia='$referencia'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: index.php");
};

?>