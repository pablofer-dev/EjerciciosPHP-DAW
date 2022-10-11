<?php
$numeroFibonnaci = $_POST["numeroFibonnaci"];
$fibonacci  = array(0, 1);
/**
 * Calcula la secuencia de Fibonacci hasta el número que le pasas.
 * 
 * @param n El número de números de Fibonacci a generar.
 * 
 * @return una matriz de números.
 */

function calcularFibonnaci($n)
{
    if (!is_numeric($n) || $n == 0) {
        $n = 10;
    }
    $fibonacci  = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}/* Imprimiendo la matriz. */

foreach (calcularFibonnaci($numeroFibonnaci) as $key) {
    echo $key;
}
