<?php

include('connection.php');
$con = connection();

$ref = $_GET['referencia'];
$sql = "DELETE FROM producto WHERE referencia='$ref'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: index.php");
};





?>
