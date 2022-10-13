<?php
session_start();
if (!empty($_SESSION["emailCliente"])) {
    echo "Estas registrado con email: " . $_SESSION["emailCliente"]. "<br>". "Nombre: ".$_SESSION["nombreCliente"];
    echo "<br>";
    echo "<a href='./dashboard2.php'>Ir dashboard 2</a>";
    echo "<br>";
    echo "<a href='logout.php'><button>Logout</button></a>";

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
   
</body>

</html>