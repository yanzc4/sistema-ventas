<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
include('db.php');
$con=conectar();

$id=$_POST['id'];
$sql="delete from clientes where id='$id'";
$query=mysqli_query($con,$sql);

?>