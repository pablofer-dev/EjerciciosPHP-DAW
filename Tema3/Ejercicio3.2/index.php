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
    /* EJERCICIO 1 */
    echo "EJERCICIO 1: ";
    echo "<br>";
    /* Creando una matriz con los valores 1,2,3,4,20,6,7,8,9,10. 
    Y sacando el maximo valor */
    $array = array(1, 2, 3, 4, 20, 6, 7, 8, 9, 10);
    echo "El valor maximo del array: " . max($array);
    echo "<br>";
    /* EJERCICIO 2 */
    echo "<br>";
    echo "EJERCICIO 2";
    echo "<br>";
    echo "Array ramdom: ";
    $array2 = array();
    $numero;
    $contador = 0;
    $count = 0;
    while ($count <= 10) {
        $numero = mt_rand(1, 10);
        if ($numero == 2) {
            $contador = $contador + 1;
        }
        array_push($array2, $numero);
        $count++;
    }
    print_r($array2);
    echo "<br>";
    echo "El número 2 se repite: " . $contador;
    echo "<br>";
    echo "<br>";
    /* EJERCICIO3 */

    echo "EJERCICIO 3";
    echo "<br>";
    foreach (range(1, 10) as $ejeY) {
        foreach (range(1, 10) as $ejeX) {
            $ejesYX[$ejeY][$ejeX] = rand(1, 10);
        }
    }
    $principal = 0;
    $secundaria = 0;
    $matrizLineas = 10;
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
            if ($i == $j) {
                $principal += $ejesYX[$i][$j];
            }
            if (($i + $j) == ($matrizLineas - 1)) {
                $secundaria += $ejesYX[$i][$j];
            }
        }
    }
    echo "La diferencia de la matriz: " . $principal - $secundaria;
    /* EJERCICIO 4 */
    echo "<br>";
    echo "<br>";
    echo "EJERCICIO 4";
    echo "<br>";

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
    while ($row = mysqli_fetch_array($datos)) {
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
    }
    $array3 = array($fechaint2, $fechadate2, $fechadatetime2, $fechatime2, $fecha_timestamp2);
    rsort($array3);
    foreach ($array3 as $key) {
        echo $key. "<br>";
    }
 
    ?>
</body>

</html>