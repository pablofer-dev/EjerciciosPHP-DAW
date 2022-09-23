<html>

<head>
    <title>Prueba</title>
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
     que si la pones entre simples la variable que muestra el nombre de la variable";
    echo "<br/>";
    echo "<br/>";
    echo "Mi nombre es $varNombre" . "<br/>";
    echo 'Mi nombre es $varNombre' . "<br/>";

    echo "<h3>Ejercicio 3 </h3>";
    echo "<h4>Comprueba cada tipo de variable</h4>";
    echo "String: ";
    print(is_string($varTexto));
    echo "<br/>";
    echo "Int: ";
    print(is_int($varEntero));
    echo "<br/>";
    echo "Boolean: ";
    print(is_bool($varBoolean));
    echo "<br/>";
    echo "Float: ";
    print(is_float($varFloat));
    echo "<br/>";
    echo "Array: ";
    /* Comprobando datos del array si son string */
    foreach ($varArray as &$valor) {
        print(is_string($valor) . " ");
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
    ?>
</body>

</html>