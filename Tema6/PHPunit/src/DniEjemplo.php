<?php

class DniEjemplo
{
    private $dni;
    public function ultimaLetraDeString($dni)
    {
        $formato = preg_match('/[0-9]{7,8}[TRWAGMYFPDXBNJZSQVHLCKE]/', $dni);
        if ($formato == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function primeraLetraNIE($dni)
    {
        $formato = preg_match('/[XYZ]{7}[0-9]{1}[A-Z]/', $dni);
        if ($formato == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function __construct(string $dni)
    {
        if (strlen($dni) > 9) {
            throw new LengthException('DNI too long');
        } else if (strlen($dni) < 9) {
            throw new LengthException('DNI too short');
        } elseif ($this->ultimaLetraDeString($dni) != 1) {
            throw new LengthException('DNI acaba con letra no permitida');
        } elseif ($this->primeraLetraNIE($dni) != 1) {
            throw new LengthException('NIE letra no permitida');
        } else {
            $this->dni = $dni;
        }
    }
}
