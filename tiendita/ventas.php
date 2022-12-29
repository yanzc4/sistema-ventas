<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="productoss.css">
    <style>
        .w-80 {
            width: 80%;
        }
    </style>
</head>

<body>
    <center>

        <div class="container w-80 bg-dark redondear position-absolute top-50 start-50 translate-middle">
            <form action="insertarv.php" method="post">
                <div class="mt-3 text-start">
                    <h3 class="text-center">Registrar Venta</h3>
                </div>
                <div class="mt-4 text-start">
                    <label class="for-label">Cliente</label>
                    <select name="cliente" class="form-control">
                        <?php
                        include('db.php');
                        $con = conectar();

                        $getClientes = "select * from clientes order by id";
                        $query = mysqli_query($con, $getClientes);
                        while ($row = mysqli_fetch_array($query)) {
                            $id = $row['id'];
                            $nombres = $row['nombre'];
                        ?>
                            <option value="<?php echo $nombres; ?>"><?php echo $nombres; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mt-2 text-start">
                    <label class="for-label">Producto</label>
                    <select name="producto" class="form-control">
                        <?php

                        $getProductos = "select * from productos order by id";
                        $consulta = mysqli_query($con, $getProductos);
                        while ($row = mysqli_fetch_array($consulta)) {
                            $idp = $row['id'];
                            $nombrep = $row['nombre'];
                        ?>
                            <option value="<?php echo $nombrep; ?>"><?php echo $nombrep; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mt-2 text-start">
                    <label class="for-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" value="1">
                </div>
                <div class="mt-2 text-start">
                    <label class="for-label">Estado</label>
                    <select name="estado" class="form-control">
                        <option value="V">VENDIDO</option>
                        <option value="F">FIADO</option>
                    </select>
                </div>
                <div class="mt-2 text-start mb-3">
                    <div class="d-grid mt-4">
                        <input onclick="return confirmacion()" type="submit" name="insertar" class="btn btn-success redondear mb-4" value="Agregar Venta">
                    </div>
                </div>
            </form>
        </div>
    </center>
    <script>
        Swal.fire(
            'Correcto',
            'Se Agrego la Venta',
            'success'
        )
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>