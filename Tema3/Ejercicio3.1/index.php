<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Tema3</title>
</head>

<body>
    <?php
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $database = "medac";

    #creacion conexión
    $conexion = mysqli_connect($servidor, $usuario, $password, $database);
    if (!$conexion) {
        die('Conexión fallida: ' . mysqli_connect_error());
    } else {
        $conexionconfirm = "CONEXIÓN REALIZADA CON EXITO" . "<br>";
    }
    #Consulta
    $consulta = "SELECT * FROM usuarios";

    #Seleccion tabla
    mysqli_select_db($conexion, "medac");
    #Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    echo "<br>";
    echo "<table>
    <tr>
    <td colspan='7' class='conexion'>$conexionconfirm</td>

    </tr>
    <tr>
        <td class='colormain'>EMAIL</td>
        <td class='colormain'>NOMBRE</td>
        <td class='colormain'>FECHA_INT</td>
        <td class='colormain'>FECHA_DATE</td>
        <td class='colormain'>FECHA_DATETIME</td>
        <td class='colormain'>FECHA_TIME</td>
        <td class='colormain'>FECHA_TIMESTAMP</td>
    </tr>";


    while ($row = mysqli_fetch_array($datos)) {
        $email = $row["email"];
        $nombre = $row["nombre"];
        $fecha_int = $row["fecha_int"];
        $fecha_date = $row["fecha_date"];
        $fecha_datetime = $row["fecha_datetime"];
        $fecha_time = $row["fecha_time"];
        $fecha_timestamp = $row["fecha_timestamp"];

        $fechaint2 =  date("Y-m-d H:i:s", $fecha_int);
        $fechadate2 =  date("Y-m-d H:i:s", strtotime($fecha_date));
        $fechadatetime2 =  date("Y-m-d H:i:s", strtotime($fecha_datetime));
        $fechatime2 =  date("Y-m-d H:i:s", strtotime($fecha_time));
        $fecha_timestamp2 =  date("Y-m-d H:i:s", strtotime($fecha_timestamp));

        $fechaint3 =  date("Y-m-d H:i:s", strtotime('-15 days', $fecha_int));
        $fechadate3 =  date("Y-m-d H:i:s", strtotime('-15 days', strtotime($fecha_date)));
        $fechadatetime3 = date("Y-m-d H:i:s", strtotime('-15 days', strtotime($fecha_datetime)));
        $fechatime3 =   date("Y-m-d H:i:s", strtotime('-15 days', strtotime($fecha_time)));
        $fecha_timestamp3 = date("Y-m-d H:i:s", strtotime('-15 days', strtotime($fecha_timestamp)));

        echo "
        <td>$email</td>
        <td>$nombre</td>
        <td>$fecha_int</td>
        <td>$fecha_date</td>
        <td>$fecha_datetime</td>
        <td>$fecha_time</td>
        <td>$fecha_timestamp</td>
        <tr>
        <td colspan='2' class='colormain'>FORMATO FECHA: Y-m-d H:i:s</td>
        <td class='colormain'>FECHA_INT</td>
        <td class='colormain'>FECHA_DATE</td>
        <td class='colormain'>FECHA_DATETIME</td>
        <td class='colormain'>FECHA_TIME</td>
        <td class='colormain'>FECHA_TIMESTAMP</td>
        </tr>

        <tr>
        <td colspan='2'></td>
        <td>$fechaint2</td>
        <td>$fechadate2</td>
        <td>$fechadatetime2</td>
        <td>$fechatime2</td>
        <td>$fecha_timestamp2</td>
        </tr>

        <tr>
        <td colspan='2' class='colormain'>RESTAR 15 HORAS: Y-m-d H:i:s</td>
        <td class='colormain'>FECHA_INT</td>
        <td class='colormain'>FECHA_DATE</td>
        <td class='colormain'>FECHA_DATETIME</td>
        <td class='colormain'>FECHA_TIME</td>
        <td class='colormain'>FECHA_TIMESTAMP</td>
        </tr>
        <tr>
        <td colspan='2'></td>
        <td>$fechaint3</td>
        <td>$fechadate3</td>
        <td>$fechadatetime3</td>
        <td>$fechatime3</td>
        <td>$fecha_timestamp3</td>
        </tr>
        ";
        echo "<br>";
    }
    echo "</table>"
    ?>
</body>

</html>