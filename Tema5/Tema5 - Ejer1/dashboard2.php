<?php
include './timeout.php';
session_start();
if (!empty($_SESSION["emailCliente"])) {
    echo "Estas registrado con email: " . $_SESSION["emailCliente"] . "<br>" . "Nombre: " . $_SESSION["nombreCliente"];
    echo "<br>";
    echo "<a href='./dashboard.php'>Ir dashboard 1</a>";
    echo "<br>";
    echo "<a href='logout.php'><button>Logout</button></a>";
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
        echo "<body style='background-color:$color'>";
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
</head>

<body>
    <br><br>
    <form action="./change_password.php" method="post">
        <label for="lname">Cambiar contraseña:</label><br>
        <input type="password" id="upassword" name="passwordUser"><br><br>
        <input type="submit" value="Cambiar">
    </form>
</body>

</html>