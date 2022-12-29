<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<center>
    <div class="container w-40 bg-dark p-4 redondear text-light position-absolute top-50 start-50 translate-middle" id="login">
        <div class="d-flex text-center mt-1">
            <h1 class="text-center">Inicio de sesion</h1>
        </div>
        <form action="validar.php" method="POST">
            <div class="mt-5 text-start">
                <label class="for-label">Correo</label>
                <input type="text" class="form-control" name="usuario" placeholder="usuario">
            </div>
            <div class="mt-2 text-start">
                <label class="for-label">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="ingrese contraseña">
            </div>
            <div class="form-check form-switch text-start mt-3">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Recordarme</label>
            </div>
            <div class="d-grid mt-4">
                <input type="submit" class="btn btn-primary redondear mb-4" value="Iniciar Sesion">
            </div>
        </form>
        <div class="mt-5">
            <ion-icon name="logo-facebook" class="fs-1 text-light"></ion-icon>
            <ion-icon name="logo-whatsapp" class="fs-1 text-light"></ion-icon>
            <ion-icon name="logo-instagram" class="fs-1 text-light"></ion-icon>
            <ion-icon name="logo-twitter" class="fs-1 text-light"></ion-icon>
        </div>
        <div class="mt-2 align-content-end flex-wrap">
            <a href="#" class="link-light">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</center>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>