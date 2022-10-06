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
    <?php
    $personas = array(
        array(
            "id" => 100,
            "email" => "prueba100@prueba100.es",
            "datos" => array(
                "permisos" => 1,
                "contacto" => array(
                    "nombre" => "Javier",
                    "apellidos" => "Jurado",
                    "ciudad" => "Cordoba",
                )
            )
        )
    );
    echo "Id: " . $personas[0]["id"] . " | Email:" . $personas[0]["email"];
    echo " | Permisos:" . $personas[0]["datos"]["permisos"];
    echo " | Nombre:" . $personas[0]["datos"]["contacto"]["nombre"] . " | Apellidos:" . $personas[0]["datos"]["contacto"]["apellidos"];
    echo " | Ciudad:" . $personas[0]["datos"]["contacto"]["ciudad"];
    ?>
</body>

</html>