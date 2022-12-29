<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
</nav> -->


    <div>
      <header>
        <h3>Productos</h3>
        <ul>
          <li class="menu-item">
            <a class="nav-link active text-light" href="productos.php" target="myFrame">Productos</a>
          </li>
          <li class="menu-item">
            <a class="nav-link active text-light" href="productosa.php" target="myFrame">Agregar Producto</a>
          </li>
          <li class="menu-item">
            <a class="nav-link active text-light" href="clientes.php" target="myFrame">Clientes</a>
          </li>
          <li class="menu-item">
            <a class="nav-link active text-light" href="ventas.php" target="myFrame">Ventas</a>
          </li>
          <li class="menu-item">
            <a class="nav-link active text-light" href="cuentas.php" target="myFrame">Cuentas</a>
          </li>
        </ul>
        <div class="hamburger" id="Hamburguer">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <div class="menu-mobile" id="Menu">
          <span class="menu-item">
            <a class="nav-link active text-light" href="productos.php" target="myFrame">Productos</a>
          </span>
          <span class="menu-item">
            <a class="nav-link active text-light" href="productosa.php" target="myFrame">Agregar Producto</a>
          </span>
          <span class="menu-item">
            <a class="nav-link active text-light" href="clientes.php" target="myFrame">Clientes</a>
          </span>
          <span class="menu-item">
            <a class="nav-link active text-light" href="ventas.php" target="myFrame">Ventas</a>
          </span>
          <span class="menu-item">
            <a class="nav-link active text-light" href="cuentas.php" target="myFrame">Cuentas</a>
          </span>
        </div>
      </header>
    </div>

    <div id="contenedor" style="height: 571px">
      <iframe src="productos.php" name='myFrame' style="height: 100%; width: 100%; border: none;"></iframe>
    </div>

    <script src="code.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>