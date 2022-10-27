<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DniEjemploTest extends TestCase
{
    public function testDniLongitudMayor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('DNI too long');
        $dni = new DniEjemplo('75895874Z1');
    }

    public function testDniLongitudMenor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('DNI too short');
        $dni = new DniEjemplo('75895874');
    }
    public function testDniAcabaConLetraNoPermitida()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('DNI acaba con letra no permitida');
        $dni = new DniEjemplo('49507191O');
    }
    public function testContieneLetrasEnMedio()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('Contiene letras en medio');
        $dni = new DniEjemplo('Q4950711B');
    }
    public function testDniEmpiezaConLetraDiferenteXYZ()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('NIE letra no permitida');
        $dni = new DniEjemplo('Q4950711B');
    }
}
