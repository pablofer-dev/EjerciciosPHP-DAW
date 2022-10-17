<?php
include './timeout.php';

session_start();
if (!empty($_SESSION["emailCliente"])) {
    echo "Estas registrado con email: " . $_SESSION["emailCliente"] . "<br>" . "Nombre: " . $_SESSION["nombreCliente"];
    echo "<br>";
    echo "<a href='./dashboard2.php'>Ir dashboard 2</a>";
    echo "<br>";
    echo "<a href='logout.php'><button>Logout</button></a>";

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
<style>

</style>

<body>
    <form action="./change_color.php" method="get">
        <p>Selecciona el color del background</p>
        <input type="radio" id="rojo" name="color" value="#FF0000">
        <label for="rojo">Rojo</label><br>
        <input type="radio" id="verde" name="color" value="#00FF00">
        <label for="verde">Verde</label><br>
        <input type="radio" id="azul" name="color" value="#0000FF">
        <label for="azul">Azul</label><br><br>
        <input type="submit" value="Cambiar">
    </form>
</body>

</html>