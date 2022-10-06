<?php
$numeroBisiesto = $_POST["numeroBisiesto"];
function calcularBisiesto($numero)
{
    if ((date('L', strtotime("$numero")))) {
        echo "Bisiesto == True";
    }
    else {
        echo "No bisiesto == False";
    }
}
echo calcularBisiesto($numeroBisiesto);
