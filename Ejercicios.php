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

    /* Declaración de variables. */
    echo "<h3>Ejercicio 1 </h3>";
    $varTexto = "hola";
    $varEntero = 1234;
    $varBoolean = true;
    $varFloat = 1.2;
    $varArray = array("1", "2");
    $varNombre = "Pablo";

    /**
     * Comprueba si el valor es una cadena.
     * 
     * @param valor El valor a comprobar.
     * 
     * @return Verdadero
     */
    function comprobarString($valor)
    {
        if (is_string($valor) == 1) {
            return "True";
        } elseif (is_string($valor) == 0) {
            return "False";
        }
    }

    /* Para introducir un salto de carro y ser monstrado por pantalla utilizamos <b/r */
    /* Imprimiendo el valor de las variables. */
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
    /* Imprimiendo el valor de la variable  y luego llamando a la función comprobarString e
    imprimiendo el resultado. */
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
    /* Crear una cadena y luego usar la función strlen para contar los caracteres de la cadena. */
    $varCadenaDeTexto = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";
    $varCadenaDeTexto2 = "74635498 B Rubén González Díaz";
    echo "Caracteres totales de la cadena de texto: " . strlen($varCadenaDeTexto);
    echo "<br/>";
    /* Convirtiendo el texto a mayúsculas y eliminando los acentos y espacios. */
    echo "Convertir a mayúsculas todo el texto: " . strtoupper($varCadenaDeTexto);
    $varCadenaDeTexto2 = str_replace(
        array('á', 'é', 'í', 'ó', 'ú', ' '),
        array('a', 'e', 'i', 'o', 'u', ''),
        $varCadenaDeTexto2
    );
    echo "<br/>";
    echo "Quitar tildes y espacio del texto: " . $varCadenaDeTexto2;

    echo "<h3>Ejercicio 5 </h3>";
    $numerosSuma = 0;
    /* Creando una matriz con la clave siendo la fecha y el valor siendo el ingreso. */
    $array0 = array("1 - 02 - 2021" => 34.21, "2 - 02 - 2021" => 23.43,  "3 - 02 - 2021" => 34.2,  "4 - 02 - 2021" => 21.6,  "5 - 02 - 2021" => 78.7,  "6 - 02 - 2021" => 76.2,  "7 - 02 - 2021" => 13.9,  "8 - 02 - 2021" => 56.2,  "9 - 02 - 2021" => 45.1,  "10 - 02 - 2021" => 87.3,  "11 - 02 - 2021" => 28.78,  "12 - 02 - 2021" => 56.23,  "13 - 02 - 2021" => 44.45,  "14 - 02 - 2021" => 67.2, "15 - 02 - 2021" => 87.1, "16 - 02 - 2021" => 32.52, "17 - 02 - 2021" => 55.94, "18 - 02 - 2021" => 83.87, "19 - 02 - 2021" => 55.65, "20 - 02 - 2021" => 67.76);
    echo "<table>
    <tr>
        <th>Fecha</th>
        <th>Ingresos</th>
    </tr>
    ";
    /* Un bucle foreach que itera sobre la matriz e imprime la clave y el valor de cada elemento. */
    foreach ($array0 as $key => $value) {
        $numerosSuma = $numerosSuma + $value;
        echo "<tr>
       <td class='color tablePromedioFix'>$key</td>
       <td class='tablePromedioFix'>$value</td>
        </tr>";
    }

    /* Dividiendo la suma de los números por el tamaño de la matriz. */

    echo "<tr>
       <td class='total tablePromedioFix'>Total</td>
       <td class='tablePromedioFix'>$numerosSuma</td>
        </tr>";
    $numerosSuma = $numerosSuma / sizeof($array0);
    echo "<tr>
       <td class='total tablePromedioFix'>Total Promedio</td>
       <td class='tablePromedioFix'>$numerosSuma</td>
        </tr>";
    echo "</table>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<div class='flexTable'>";
    echo "<div class = 'leftTable'>";
    $array1 = array("Chris" => 38, "Dennis" => 45, "Sarah" => 29, "Karen" => 47);
    /* Creando una tabla con los valores de la matriz. */
    echo "<table>
    <tr>
        <th>Persona</th>
        <th>Edad</th>
    </tr>
    ";

    /* Un bucle foreach que recorre la matriz e imprime la clave y el valor de cada elemento. */
    foreach ($array1 as $key => $value) {
        echo "<tr>
                <td class='color'>$key</td>
                <td>$value</td>
                </tr>
            
        ";
    }
    echo "</table>";
    echo "</div>";
    echo "<br/>";
    echo "<br/>";
    echo "<div class='rightTable'>";
    /* Creación de una matriz multidimensional. */
    $array2 = array("Destornillador" => array(1, 3), "Llave De Seguridad" => array(2, 5), "Martillo" => array(1, 7));
    /* Creando una tabla con los valores de la matriz. */
    echo "<table>
   <tr>
       <th>Producto</th>
       <th>Cantidad</th>
       <th>Precio</th>
   </tr>";
    $numero2 = 0;
    $varTotal = 0;
    /* Un bucle foreach que itera sobre la matriz e imprime la clave y el valor de cada elemento. */
    foreach ($array2 as $key => $value) {
        $varTotal = $varTotal + ($value[0] * $value[1]);
        $numero2 = $numero2 + 1;
        echo "<tr>
               <td class='color'>$key</td>";
        /* Un bucle foreach anidado. */
        foreach ($value as $value2) {
            echo "
               <td>$value2</td>";
        }
        echo "</tr>";
        if (sizeof($array2) == $numero2) {
            echo "<tr>";
            echo "<td  colspan='2' class='total'>Total</td>";
            echo "<td >$varTotal</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "<br/>";
    echo "<br/>";
    $array3 = array("Reproductor MP3 (80GB)" => array(192.02, 1), "Fundas de Colores" => array(2.50, 5), "Reproducotr de radio & control remoto" => array(12.99, 1));
    /* Creando una tabla con los valores de la matriz. */
    /* Crear una tabla con el nombre del producto, el precio unitario, las unidades y el subtotal. */
    echo "<table>
    <tr>
        <th>Nombre producto</th>
        <th>Precio unitario</th>
        <th>Unidades</th>
        <th>Subtotal</th>
    </tr>
    ";
    $numero3 = 0;
    $varUnidades = 0;
    $varSubTotal = 0;
    /* Sumando los valores de la matriz. */
    foreach ($array3 as $key => $value) {
        $numero3 = $numero3 + 1;
        $varUnidades = $value[1] + $varUnidades;
        $varSubTotal = $value[0] + $varSubTotal;
        echo "<tr>
                <td class='color'>$key</td>";
        /* Un bucle foreach anidado. */
        foreach ($value as $value2) {
            echo "<td>$value2</td>";
        }

        /* Multiplicando el primer y segundo valor de la matriz y luego imprimiendo el resultado. */
        $numero1 = $value[0] * $value[1];
        echo "<td>$numero1</td>";

        /* Añadir una columna a la tabla. */
        if ($key == end($array3)) {
            echo "<td>aasd</td>";
        }
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td class='total'>TOTAL</td>";
    echo "<td>-</td>";
    echo "<td>$varUnidades</td>";
    echo "<td>$varSubTotal</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>

</html>