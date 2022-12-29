<?php
include('db.php');
$con=conectar();

$id=$_POST['id'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];

$sql="update productos set nombre='$producto',precio='$precio' where id='$id'";
$query=mysqli_query($con,$sql);

    if ($query) {
        header('location: productos.php');
    }
?>