<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function funcion2($texto)
    {
        $texto .= " y algo mas";
    }
    $cad = "Esto es una cadena";
    funcion2($cad);
    echo $cad;
    ?>
</body>

</html>