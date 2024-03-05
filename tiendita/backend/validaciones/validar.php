<?php

include('../config/db.php');
$con=conectar();

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT * FROM personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    //dirigirse a la pagina de inicio
    header("location: ../inicio.php");

}else{
    include('.../index.php')
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($con);

?>