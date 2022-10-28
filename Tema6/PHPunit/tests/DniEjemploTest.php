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
    public function testContieneLetrasEnMedio()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('DNI contiene letras en medio');
        $dni = new DniEjemplo('6495X7199');
    }
    public function testAcabaConLetraIncorrecta()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Acaba con una letra incorrecta');
        $dni = new DniEjemplo('49507191U');
    }
}
