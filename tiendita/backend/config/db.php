<?php


function conectar(){
    require_once('config.php');
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>