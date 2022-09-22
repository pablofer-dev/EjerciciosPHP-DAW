<html>

<head>
    <title>Prueba</title>
</head>

<body>
    <?php
    $varTexto = "hola";
    $varEntero = 1234;
    $varBoolean = true;
    $varFloat = 1.2;
    $varArray = array("1", "2");
    /* Para introducir un salto de carro y ser monstrado por pantalla utilizamos <b/r */
    echo "Variable de tipo cadena de texto: " . $varTexto . "<br/>";
    echo "Variable de tipo entero: " . $varEntero . "<br/>";
    echo "Variable de tipo boolean: " . $varBoolean . "<br/>";
    echo "Variable de tipo float: " . $varFloat . "<br/>";
    echo "Variable de tipo compuesto";
    print_r($varArray); #La funcion es print_r es la utilizada para imprimir el contenido de un array
    ?>
</body>

</html>