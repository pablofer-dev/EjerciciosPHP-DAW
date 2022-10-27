<?php
session_start();
if (isset($_GET["type"]) && $_GET["type"] == 1) {
    echo "El usuario introducido no existe o sus credenciales son inválidas.";
}
if (isset($_GET["type"]) && $_GET["type"] == 2) {
    echo "Es necesario iniciar sesión";
}
if (isset($_GET["type"]) && $_GET["type"] == 3) {
    echo "Ha cerrado sesión correctamente.";
}
if (isset($_GET["type"]) && $_GET["type"] == "exp") {
    echo "Sesión expirada";
}
if (isset($_GET["type"]) && $_GET["type"] == 6) {
    echo "La contraseña no puede estar vacia";
}
if (!empty($_SESSION["emailCliente"])) {
    header('Location: dashboard.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <form action="login.php" method="post" class="mt-3">
        <ul>
            <li>
                <label for="name">Email:</label>
                <input type="email" id="email" name="user_email" class="p-1">
            </li>
            <br>
            <li>
                <label for="mail">Password:</label>
                <input type="password" id="password" name="user_password" class="p-1">
            </li>
        </ul>
        <button type="submit" class="btn btn-primary">Logear</button>
    </form>
</body>

</html>