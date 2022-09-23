<html>

<head>
    <title>Ejercicios Tema2</title>
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    echo "<h3>Ejercicio 1 </h3>";
    $varTexto = "hola";
    $varEntero = 1234;
    $varBoolean = true;
    $varFloat = 1.2;
    $varArray = array("1", "2");
    $varNombre = "Pablo";

    function comprobarString($valor)
    {
        if (is_string($valor) == 1) {
            return "True";
        } elseif (is_string($valor) == 0) {
            return "False";
        }
    }

    /* Para introducir un salto de carro y ser monstrado por pantalla utilizamos <b/r */
    echo "Variable de tipo cadena de texto: " . $varTexto . "<br/>";
    echo "Variable de tipo entero: " . $varEntero . "<br/>";
    echo "Variable de tipo boolean: " . $varBoolean . "<br/>";
    echo "Variable de tipo float: " . $varFloat . "<br/>";
    echo "Variable de tipo compuesto" . "<br/>";
    print_r($varArray) . "<br/>"; #La funcion es print_r es la utilizada para imprimir el contenido de un array
    echo "<br/>";

    echo "<h3>Ejercicio 2 </h3>";
    /* Ejercicio 2 */
    echo "La principal difrenecia es que al nombrar un variable dentro de comillas dobles se muestra el valor de variable mientras 
     que si la pones entre simples la variable que muestra el nombre de la variable.";
    echo "<br/>";
    echo "<br/>";
    echo "Mi nombre es $varNombre" . "<br/>";
    echo 'Mi nombre es $varNombre' . "<br/>";

    echo "<h3>Ejercicio 3 </h3>";
    echo "<h4>Comprueba cada tipo de variable</h4>";
    echo "$varTexto: ";
    print(comprobarString($varTexto));
    echo "<br/>";
    echo "$varEntero: ";
    print(comprobarString($varEntero));
    echo "<br/>";
    echo "$varBoolean: ";
    print(comprobarString($varBoolean));
    echo "<br/>";
    echo "$varFloat: ";
    print(comprobarString($varFloat));
    echo "<br/>";
    echo "Array: ";
    /* Comprobando datos del array si son string */
    foreach ($varArray as &$valor) {
        print(comprobarString($valor) . " ");
    }
    echo "<h4>Convirtiendo las variables a string</h4>";
    /* Conviertiendo variables a string y viendo si son string */
    echo "Convirtiendo de Entero a String: ";
    print(is_string(strval($varEntero)));
    echo "<br/>";
    echo "Convirtiendo de Boolean a String: ";
    print(is_string(strval($varBoolean)));
    echo "<br/>";
    echo "Convirtiendo de Float a String: ";
    print(is_string(strval($varFloat)));

    echo "<h3>Ejercicio 4 </h3>";
    $varCadenaDeTexto = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";
    $varCadenaDeTexto2 = "74635498 B Rubén González Díaz";
    echo "Caracteres totales de la cadena de texto: " . strlen($varCadenaDeTexto);
    echo "<br/>";
    echo "Convertir a mayúsculas todo el texto: " . strtoupper($varCadenaDeTexto);
    $varCadenaDeTexto2 = str_replace(
        array('á', 'é', 'í', 'ó', 'ú', ' '),
        array('a', 'e', 'i', 'o', 'u', ''),
        $varCadenaDeTexto2
    );
    echo "<br/>";
    echo "Quitar tildes y espacio del texto: " . $varCadenaDeTexto2;

    echo "<h3>Ejercicio 5 </h3>";
    $array1 = array("Chris" => 38, "Dennis" => 45, "Sarah" => 29, "Karen" => 47);
    echo "<table>
    <tr>
        <th>Persona</th>
        <th>Edad</th>
    </tr>
    ";

    foreach ($array1 as $key => $value) {
        echo "<tr>
                <td class='color'>$key</td>
                <td>$value</td>
                </tr>
            
        ";
    }
    echo "</table>";
    echo "<br/>";
    echo "<br/>";
    $array2 = array("Destornillador" => array(1, 3), "Llave De Seguridad" => array(2, 5), "Martillo" => array(1, 7));
    echo "<table>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>";
    $numero2 = 0;
    $varTotal = 0;
    foreach ($array2 as $key => $value) {
        $varTotal = $varTotal + ($value[0] * $value[1]);
        $numero2 = $numero2 + 1;
        echo "<tr>
                <td class='color'>$key</td>";
        foreach ($value as $value2) {
            echo "
                <td>$value2</td>";
        }
        echo "</tr>";
        if (sizeof($array2) == $numero2) {
            echo "<tr>";
            echo "<td  colspan='2' class='color'>Total</td>";
            echo "<td >$varTotal</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<br/>";
    $array3 = array("Reproductor MP3 (80GB)" => array(192.02, 1), "Fundas de Colores" => array(2.50, 5), "Reproducotr de radio & control remoto" => array(12.99, 1));
    echo "<table>
    <tr>
        <th>Nombre producto</th>
        <th>Precio unitario</th>
        <th>Unidades</th>
        <th>Subtotal</th>
    </tr>
    ";

    foreach ($array3 as $key => $value) {
        echo "<tr>
                <td class='color'>$key</td>";
        foreach ($value as $value2) {
            echo "<td>$value2</td>";
        }
        echo "<td>$value[0] * $value[1]</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>