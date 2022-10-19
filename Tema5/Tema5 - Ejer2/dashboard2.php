<?php
include './timeout.php';
session_start();
if (!empty($_SESSION["emailCliente"])) {
    echo "Estas registrado con email: " . $_SESSION["emailCliente"] . "<br><br>" . "Nombre: " . $_SESSION["nombreCliente"];
    echo "<br><br>";
    echo "<a href='./dashboard.php'>Ir dashboard 1</a>";
    echo "<br><br>";
    echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
        echo "<body style='background-color:$color'>";
    }
    if (isset($_GET["confirm"]) && $_GET["confirm"] == "1") {
        echo "<br>Se ha cambiado la contraseña con exito";
    }

    if (isset($_GET["confirm"]) && $_GET["confirm"] == "0") {
        echo "<br>Error al cambiar la contraseña";
    }
    actividadUsuario(60);
} else {
    header('Location: index.php?type=2');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <br><br>
    <form action="./change_password.php" method="post">
        <label for="lname">Cambiar contraseña:</label><br>
        <input type="password" id="upassword" name="passwordUser" class="p-1"><br><br>
        <input type="submit" value="Cambiar Contraseña" class="btn btn-success">
    </form>
</body>

</html>