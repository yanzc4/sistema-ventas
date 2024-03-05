<?php
include('../config/db.php');
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="update clientes set nombre='$nombre' where id='$id'";
$query=mysqli_query($con,$sql);

    if ($query) {
        header('location: clientes.php');
    }
?>