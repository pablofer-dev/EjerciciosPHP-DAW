<?php

class DniEjemplo
{

    private $dni;
    public function __construct(string $dni)
    {
        if (strlen($dni) > 9) {
            throw new LengthException('DNI too long');
        } else if (strlen($dni) < 9) {
            throw new LengthException('DNI too short');
        } else if ($this->comprobarDni($dni) != true) {
            throw new LengthException('DNI contiene letras en medio');
        } else if ($this->comprobarDni($dni) != true) {
            throw new LengthException('DNI acaba con una letra no permitida');
        }
    }
    public function comprobarDni($dni)
    {
        if (preg_match("/[0-9]{8}[A-Z]{1}/", $dni) == 1 || preg_match("/[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}/", $dni) == 1) {
            return true;
        } else {
            return 0;
        }
    }
}
