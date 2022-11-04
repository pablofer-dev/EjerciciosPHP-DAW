<?php

/* Una característica de PHP 7 que obliga a que el tipo de los parámetros sea el mismo que el tipo
declarado en la función. */

declare(strict_types=1);
class CorreoEjemplo
{
    private $nif;
    public function __construct(string $nif)
    {
        if (strlen($nif) > 9) {
            throw new LengthException('El valor del DNI no puede ser mayor a 9.');
        } elseif (strlen($nif) < 9) {
            throw new LengthException('El valor del DNI no puede ser menor a 9.');
        } elseif (preg_match('/^[IJNOTUVWXYZ][0-9]{8}/', $nif)) {
            throw new LengthException('Nie letra invalida');
        } 
        $this->nif = $nif;
    }
}

