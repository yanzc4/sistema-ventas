<?php
include('../config/db.php');
$con=conectar();


    $producto=$_POST['producto'];
    $nombre=$_POST['cliente'];
    $cantidad=$_POST['cantidad'];
    $estado=$_POST['estado'];
    $sql="insert into ventas(cliente, producto, cantidad, estado, fecha) values('$nombre','$producto','$cantidad','$estado',curdate())";
    $query=mysqli_query($con,$sql);

    if ($query) {
        header("Location: ventas.php");
        
    }else{
        echo "Error";

    }
?>