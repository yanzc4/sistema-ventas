<?php
include('db.php');
$con=conectar();


    $nombre=$_POST['nombre'];
    $sql="insert into clientes(nombre) values('$nombre')";
    $query=mysqli_query($con,$sql);

    if ($query) {
        header("Location: clientes.php");

    }else{

    }
?>