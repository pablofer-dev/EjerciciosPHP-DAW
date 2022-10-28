<?php

use PHPUnit\Framework\TestCase;

final class DniEjemploTest extends TestCase
{


    /**
     * Comprueba que la clase DNI lanza una excepción cuando el DNI tiene más de 9 caracteres
     */
    public function testDniLongitudMayor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser mayor a 9.');
        $dni = new DniEjemplo('0000000000');
    }

    /**
     * Comprueba si el DNI tiene menos de 9 caracteres.
     */
    public function testDniLongitudMenor(): void
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser menor a 9.');
        $dni = new DniEjemplo('00000000');
    }
    /**
     * Comprueba si el DNI termina en I, O, U, Ñ.
     */
    public function testDniAcabaConLetraNoPermitida(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('El DNI no puede acabar por I, O, U, Ñ');
        $dni = new DniEjemplo('00000000O');
    }
    /**
     * Comprueba si el DNI tiene letras en medio.
     */
    public function testDniContieneLetrasEnMedio(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('El DNI no puede tener letras itermedias');
        $dni = new DniEjemplo('000A0000A');
    }

    /**
     * Comprueba si el DNI empieza por X, Y o Z.
     */
    public function testDniAcabaConLetraDiferenteXYZ(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('El NIE no puede empezar por X ,Y, Z');
        $dni = new DniEjemplo('A0000000R');
    }

    /**
     * > La función debería lanzar una excepción si el último carácter del DNI no es una letra
     */
    public function testDniUltimaLetraCorrecta(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('ERROR: La letra del DNI es incorrecta!');
        $dni = new DniEjemplo('00000000J');
    }

    public function testDniCorrecto()
    {
        $this->assertInstanceOf(
            DniEjemplo::class,
            new DniEjemplo('49507191J')
        );
    }
}
