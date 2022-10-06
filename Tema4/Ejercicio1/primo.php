<?php
if (calcularPrimo($numeroPrimo = $_POST["numeroPrimo"])) {
    echo "El numero es primo == True";
}
else {
    echo "El numero no es primo == False";
}
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
