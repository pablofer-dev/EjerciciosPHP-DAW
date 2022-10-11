<?php
/* Comprobar si el número es primo o no. */
if (calcularPrimo($numeroPrimo = $_POST["numeroPrimo"])) {
    echo "El numero es primo == True";
}
else {
    echo "El numero no es primo == False";
}
/**
 * Comprueba si un número es primo o no.
 * 
 * @param numero El número a comprobar.
 * 
 * @return un valor booleano.
 */
function calcularPrimo($numero)
{
    if ($numero == 1)
        return False;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0)
            return False;
    }
    return True;
}
