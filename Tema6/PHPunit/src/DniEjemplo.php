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
            throw new LengthException('Debe introducir 9 carácteres, no más');
            /* Comprobando que la longitud de la cadena es inferior a 9 caracteres. */
        } elseif (strlen($dni) < 9) {
            throw new LengthException('Debe introducir 9 carácteres, no menos');
            /* Comprobando que el DNI termina en letra. */
        } elseif (preg_match('/\d$/', $dni)) {
            throw new DomainException('El DNI debe terminar por una letra');
            /* Comprobando que el DNI no termina en las letras I, O, U o Ñ. */
        } elseif (preg_match('/[UIOÑ]$/u', $dni)) {
            throw new DomainException('El DNI no debe terminar por la letra [I, O, U, Ñ]');
            /* Comprobando que el DNI no contiene letras intermedias. */
        } elseif (!preg_match('/\d{7,7}.$/', $dni)) {
            throw new DomainException('Un DNI no puede tener letras intermedias');
            /* Comprobando que el DNI no empieza por una letra diferente a XYZ. */
        } elseif (!preg_match('/^[XYZ0-9]/', $dni)) {
            throw new DomainException('En caso de un NIF debe iniciar por las letras XYZ');
            /* Comprobando si el DNI es válido. */
        } elseif (!($this->comprobarLetraDni($dni))) {
            throw new InvalidArgumentException('La letra del dni introducido no es correcta');
        }
    }

    /**
     * Valida un DNI (DNI español)
     * 
     * @param dni El DNI a validar.
     * 
     * @return un valor booleano.
     */
    public function comprobarLetraDni(string $dni)
    {
        /* Comprobando si el DNI es válido. */
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
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
