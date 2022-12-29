<?php
include('db.php');
$con=conectar();


    $producto=$_POST['producto'];
    $precio=$_POST['precio'];
    $sql="insert into productos(nombre, precio) values('$producto','$precio')";
    $query=mysqli_query($con,$sql);

    if ($query) {
        header("Location: productos.php");

    }else{

    }
?>