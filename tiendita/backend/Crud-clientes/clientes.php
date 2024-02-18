<?php
include('../config/db.php');
$con = conectar();
$sql = "select * from clientes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/productoss.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
        .producto {
            max-width: 80px;
        }

        .fz-30 {
            font-size: 30px;
        }

        #header {
            position: sticky;
            top: 0;
            background-color: #000;
        }
    </style>
</head>

<body>
    <center>
        <div id="header" class="container py-2">
            <h3 class="text-center">Formulario de Clientes</h3>
        </div>

        <div class="container w-100 text-light mt-2" id="lista">
            <div>
                <button type="button" class="btn btn-primary w-50 redondear mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Agregar
                </button>
            </div>
        </div>

        <div class="container mt-2">
            <div class="row">
                <?php foreach ($query as $row) { ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                        <div class="col-6 bg-primary redondear mt-2 mb-1">
                            <img src="simfoto.jpg" class="producto mt-3"><br>
                            <label id="pr" class="mt-2 fw-bold"><?php echo $row['nombre'] ?></label><br>
                            <a class="btn btn-warning mb-2" href="actualizarc.php?id=<?php echo $row['id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                </svg>
                            </a>
                            <a onclick="eliminacion(<?php echo $row['id'] ?>)" class="btn btn-danger mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </center>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-mg">
            <div class="modal-content bg-dark redondear position-absolute top-50 start-50 translate-middle">

                <div class="modal-body p-0">
                    <div class="container p-4" id="agregar">
                        <div class="d-flex text-center mt-1">
                            <div class="col-9">
                                <h1 class="text-center">Agregar Producto</h1>
                            </div>
                            <div class="col-auto ms-auto">
                                <button type="button" class="btn btn-primary fs-5 text-end" data-bs-dismiss="modal" aria-label="Close">
                                    <ion-icon name="close-outline"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <form action="insertarc.php" method="post">
                            <div class="mt-5 text-start">
                                <label class="for-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="ingrese nombre">
                            </div>

                            <div class="mt-2 text-start mb-3">
                                <div class="d-grid mt-4">
                                    <input type="submit" name="insertar" class="btn btn-primary redondear mb-4" value="Agregar Cliente">
                                </div>
                        </form>
                    </div>

                    <script>
                        function eliminacion(codigo) {
                            Swal.fire({
                                title: '¿Deseas eliminar?',
                                text: "¡No podra recuperarlo una vez eliminado!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: '¡Si, eliminar!',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    mandar_php(codigo)
                                }
                            })
                        }
                    </script>
                    <script>
                        function mandar_php(codigo) {
                            parametros = {
                                id: codigo
                            };
                            $.ajax({
                                data: parametros,
                                url: 'deletec.php',
                                type: 'POST',
                                beforeSend: function() {},
                                success: function() {
                                    Swal.fire('Eliminado!', 'El cliente ah sido eliminado', 'success').then((result) => {
                                        window.location.href = 'clientes.php'
                                    });
                                },
                            });
                        }
                    </script>
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>