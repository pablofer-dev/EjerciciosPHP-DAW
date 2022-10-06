<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tema4</title>
</head>

<body>
    <li>
        Crea la función esPrimo que reciba por parámetro un entero y devuelva un booleano indicando true si es primo o falso en caso contrario.
    </li>
    <br>
    <form action="primo.php" method="post">
        Primo <input name="numeroPrimo" type="number">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <hr>
    <li>
        Crea la función esBisiesto que reciba por parámetro una fecha en formato “dd-mm-aaaa” y devuelva un booleano indicando true si el día es bisiesto o false en caso contrario.
    </li>
    <br>
    <form action="bisiesto.php" method="post">
        Bisiesto <input name="numeroBisiesto" type="date">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <hr>
    <li>Crea la función fibonacci que reciba por parámetro la cantidad de elementos que se desea obtener de la serie Fibonacci (si no se especifica nada por defecto obtendrá los 10 primeros), y devuelva un array con dicha sucesión de números.</li>
    <br>
    <form action="fibonnaci.php" method="post">
        Fibonnaci <input name="numeroFibonnaci" type="number" value="10">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <hr>
    <li>
        Crea la función existeUsuario que reciba por parámetro un email y contraseña, conecte a la base de datos MEDAC y consulte en la tabla usuarios si existe, devolviendo true si ha encontrado el usuario o false en caso contrario.
    </li>
    <br>
    <form action="registrar.php" method="post">
        Email <input name="email" type="email"><br>
        Contraseña <input name="password" type="password">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>