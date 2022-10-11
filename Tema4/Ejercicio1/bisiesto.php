<?php
/**
 * Comprueba si el año es bisiesto.
 * 
 * @param numero El año para comprobar.
 */
$numeroBisiesto = $_POST["numeroBisiesto"];
function calcularBisiesto($numero)
{
    if ((date('L', strtotime("$numero")))) {
        return true;
    }
    else {
        return false;
    }
}
/* Comprobar si el año es bisiesto. */
if (calcularBisiesto($numeroBisiesto)) {
    echo "Año bisiesto";
}
else {
    echo "Año no bisiesto";
}
