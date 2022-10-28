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
        } else if (($this->comprobarDni($dni) == false)) {
            throw new LengthException('DNI contiene letras en medio');
        } else if (($this->comprobarDni($dni) == false)) {
            throw new LengthException('Acaba con una letra incorrecta');
        } else {
            $this->dni = $dni;
        }
    }
    /* '49507191U' */
    public function comprobarDni($dni)
    {
        if (preg_match("/[0-9]{8}[A-Z]{1}/", $dni) == 1) {
            if (preg_match("/[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}/", $dni) == 1) {
                return true;
            }
            return true;
        } else {
            return false;
        }
        if (preg_match("/[A-Z]{1}[0-9]{7}[A-Z]{1}/", $dni) == 1) {
            if (preg_match("/[XYZ]{1}[0-9]{7}[A-Z]{1}/", $dni) == 1) {
                return true;
            }
            return true;
        } else {
            return false;
        }
    }
}
