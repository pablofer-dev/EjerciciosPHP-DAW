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
        } else {
            $this->dni = $dni;
        }
    }
}
