<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php include("../config/db.php");
$con = conectar();


$buscardor = mysqli_query($con, "select * from ventas where cliente LIKE LOWER('%" . $_POST["buscar"] . "%') or fecha LIKE LOWER('%" . $_POST["buscar"] . "%') order by fecha desc");
$numero = mysqli_num_rows($buscardor); ?>




<?php while ($resultado = mysqli_fetch_assoc($buscardor)) { ?>
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
        <div class="col-9 bg-primary redondear py-2 px-2">
            <label class="text-center mt-2 fw-bold fz-30"><?php echo $resultado['cliente'] ?></label><br>
            <label class="text-start mt-2 mb-2">PRODUCTO: <?php echo $resultado['producto'] ?></label><br>
            <label class="text-start mt-2 mb-2">CANTIDAD: <?php echo $resultado['cantidad'] ?></label><br>
            <label class="text-start mt-2 mb-2">ESTADO: <?php echo $resultado['estado'] ?></label><br>
            <label class="text-start mt-2 mb-2">FECHA: <?php echo $resultado['fecha'] ?></label><br>
            <a onclick="eliminacion(<?php echo $resultado['id'] ?>)" class="btn btn-danger mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                </svg>
            </a>
        </div>
    </div>

<?php } ?>