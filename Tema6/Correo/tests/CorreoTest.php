<?php

use PHPUnit\Framework\TestCase;

/* Comprueba que la clase DniEjemplo se puede instanciar con un número de NIE válido */

class CorreoTest extends TestCase
{

    public function testDniLongitudMayor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser mayor a 9.');
        $dni = new CorreoEjemplo('0000000000');
    }
    public function testDniLongitudMenor(): void
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser menor a 9.');
        $dni = new CorreoEjemplo('00000000');
    }
    public function testLetraInvalida(): void
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('Nie letra invalida');
        $dni = new CorreoEjemplo('A00000000');
    }

    public function testNIF()
    {
        $this->assertInstanceOf(
            CorreoEjemplo::class,
            new CorreoEjemplo('T00000000')
        );
    }
}
