<?php
include './timeout.php';

session_start();
if (!empty($_SESSION["emailCliente"])) {
    echo "Estas registrado con email: " . $_SESSION["emailCliente"] . "<br><br>" . "Nombre: " . $_SESSION["nombreCliente"];
    echo "<br><br>";
    echo "<a href='./dashboard2.php'>Ir dashboard 2</a>";
    echo "<br><br>";
    echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";

    actividadUsuario(60);
} else {
    header('Location: index.php?type=2');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
        <p class="mt-4">Selecciona el color del background</p>
        <input type="radio" id="rojo" name="color" value="#FF0000">
        <label for="rojo">Rojo</label><br>
        <input type="radio" id="verde" name="color" value="#00FF00">
        <label for="verde">Verde</label><br>
        <input type="radio" id="azul" name="color" value="#0000FF">
        <label for="azul">Azul</label><br><br>
        <input type="submit" value="Cambiar" class="btn btn-success">
    </form>
</body>

</html>