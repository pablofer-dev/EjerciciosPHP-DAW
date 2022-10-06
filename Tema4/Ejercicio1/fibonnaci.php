<?php
$numeroFibonnaci = $_POST["numeroFibonnaci"];
$fibonacci  = array(0, 1);

function calcularFibonnaci($n)
{
    if (!is_numeric($n) || $n == 0) {
        $n = 10;
    }
    $fibonacci  = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        echo $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
}
echo calcularFibonnaci($numeroFibonnaci);
