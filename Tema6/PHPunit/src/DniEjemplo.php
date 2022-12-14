<?php

/* Una característica de PHP 7 que obliga a que el tipo de los parámetros sea el mismo que el tipo
declarado en la función. */

declare(strict_types=1);
class DniEjemplo
{

    private $dni;
    /**
     * Comprueba que la longitud de la cadena sea inferior a 9 caracteres, que la longitud de la cadena
     * sea inferior a 9 caracteres, que el DNI termine en letra, que el DNI no termine en letras I, O,
     * U o Ñ , que el DNI no contenga letras intermedias, que el DNI no empiece por una letra distinta
     * a XYZ y que el DNI sea válido
     * 
     * @param dni El número de DNI.
     */
    public function __construct(string $dni)
    {
        /* Comprobando que la longitud de la cadena es inferior a 9 caracteres. */
        if (strlen($dni) > 9) {
            throw new LengthException('El valor del DNI no puede ser mayor a 9.');
            /* Comprobando que la longitud de la cadena es inferior a 9 caracteres. */
        } elseif (strlen($dni) < 9) {
            throw new LengthException('El valor del DNI no puede ser menor a 9.');
            /* Comprobando si el DNI termina en I, O, U o Ñ. */
        } elseif (preg_match('/[UIOÑ]$/u', $dni)) {
            throw new DomainException('El DNI no puede acabar por I, O, U, Ñ');
            /* Comprobando que el DNI no contiene letras intermedias. */
        } elseif (!preg_match('/\d{7,7}.$/', $dni)) {
            throw new DomainException('El DNI no puede tener letras itermedias');
            /* Comprobando que el DNI no empieza por una letra diferente a XYZ. */
        } elseif (!preg_match('/^[XYZ0-9]/', $dni)) {
            throw new DomainException('El NIE no puede empezar por X ,Y, Z');
            /* Comprobando si el DNI es válido. */
        } elseif (!($this->comprobarLetraDni($dni))) {
            throw new InvalidArgumentException('ERROR: La letra del DNI es incorrecta!');
        }
        $this->dni = $dni;
    }


    /**
     * Si el último carácter del DNI es igual al carácter 23 de la cadena "TRWAGMYFPDXBNJZSQVHLCKE"
     * (que es la letra correspondiente al número del DNI), entonces el DNI es válido
     * 
     * @param dni El número de DNI a validar.
     */
    public function comprobarLetraDni($dni)
    {
        if ("Y" == (substr($dni, 0, 1))) {
            $dni = str_replace("Y", "1", $dni);
        } else if ("X" == (substr($dni, 0, 1))) {
            $dni = str_replace("X", "0", $dni);
        } else if ("Z" == (substr($dni, 0, 1))) {
            $dni = str_replace("Z", "2", $dni);
        }
        $l = substr($dni, -1);
        $n = substr($dni, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $n % 23, 1) == $l && strlen($l) == 1 && strlen($n) == 8) {
            return true;
        }
        return false;
    }

    /**
     * El método toString() devuelve el valor de la propiedad dni.
     * 
     * @return El DNI de la persona.
     */
    public function toString()
    {
        return $this->dni;
    }
}
