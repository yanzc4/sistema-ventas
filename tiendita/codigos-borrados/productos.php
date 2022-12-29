<?php
include('db.php');
$con = conectar();
$sql = "select * from productos";
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="productoss.css">
  <style>
    .producto {
      max-width: 80px;
    }

    .fz-30 {
      font-size: 30px;
    }
  </style>
</head>

<body>
  <center>
 
  <!--
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Cuentas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  -->


    <!--
    <div>
      <header>
        <h3>Productos</h3>
        <ul>
          <li class="menu-item">Inicio</li>
          <li class="menu-item">Agregar</li>
          <li class="menu-item">Clientes</li>
          <li class="menu-item">Ventas</li>
          <li class="menu-item">Cuentas</li>
        </ul>
        <div class="hamburger" id="Hamburguer">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <div class="menu-mobile" id="Menu">
          <span class="menu-item">Inicio</span>
          <span class="menu-item">Agregar</span>
          <span class="menu-item">Clientes</span>
          <span class="menu-item">Ventas</span>
          <span class="menu-item">Cuentas</span>
        </div>
      </header>
    </div> -->

    <div class="container w-100 text-light mt-3" id="lista">
      <div>
        <button type="button" class="btn btn-primary w-50 redondear mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Agregar
        </button>
      </div>
      <div class="d-block">
        <?php foreach ($query as $row) { ?>
          <div class="col-5 bg-primary redondear mt-2 mb-1">
            <img src="simfoto.jpg" class="producto mt-3"><br>
            <label id="pr" class="mt-2 fw-bold"><?php echo $row['nombre'] ?></label><br>
            <label class="mt-2 mb-2">S/. <?php echo $row['precio'] ?></label><br>
            <a class="btn btn-warning mb-2" href="actualizar.php?id=<?php echo $row['id'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
            </svg>
            </a>
            <a onclick="return confirmacion()" class="btn btn-danger mb-2" href="delete.php?id=<?php echo $row['id'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg>
            </a>
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

            <form action="insertar.php" method="post">
              <div class="mt-5 text-start">
                <label class="for-label">Nombre</label>
                <input type="text" class="form-control" name="producto" placeholder="ingrese producto">
              </div>
              <div class="mt-2 text-start">
                <label class="for-label">Precio</label>
                <input type="text" class="form-control" name="precio" placeholder="12.4">
              </div>
              <div class="mt-2 text-start mb-3">
                <div class="d-grid mt-4">
                  <input type="submit" name="insertar" class="btn btn-primary redondear mb-4" value="Agregar Producto">
                </div>
            </form>
          </div>

          <script>
              function confirmacion(){
                var respuesta = confirm("¿Deseas Emininar?");
                if (respuesta == true) {
                  return true;
                }else{
                  return false;
                }
              }
          </script>
          <script src="code.js"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>