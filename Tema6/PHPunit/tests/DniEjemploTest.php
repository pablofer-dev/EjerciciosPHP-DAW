<?php

use PHPUnit\Framework\TestCase;

final class DniTest extends TestCase
{
    /**
     * Comprueba que la clase DNI lanza una excepción cuando el DNI tiene más de 9 caracteres
     */
    public function testDniLongitudMayor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser mayor a 9.');
        $dni = new DniEjemplo('0123456789');
    }

    /**
     * Comprueba si el DNI tiene menos de 9 caracteres.
     */
    public function testDniLongitudMenor(): void
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('El valor del DNI no puede ser menor a 9.');
        $dni = new DniEjemplo('01234567');
    }
    /**
     * Comprueba si el DNI tiene letras en medio.
     */
    public function testDniContieneLetrasEnMedio(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El DNI no puede tener letras itermedias');
        $dni = new DniEjemplo('012AB567R');
    }
    /**
     * Comprueba si el DNI termina en letra.
     */
    public function testDniAcabaConLetra(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El DNI tiene que terminar por una letra');
        $dni = new DniEjemplo('012345678');
    }
    
    /**
     * Comprueba si el DNI termina en I, O, U, Ñ.
     */
    public function testDniAcabaConLetraNoPermitida(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El DNI no puede acabar por I, O, U, Ñ');
        $dni = new DniEjemplo('01234567I');
    }



    /**
     * Comprueba si el DNI empieza por X, Y o Z.
     */
    public function testDniAcabaConLetraDiferenteXYZ(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El NIE no puede empezar pro X ,Y, Z');
        $dni = new DniEjemplo('A1234567R');
    }

    /**
     * > La función debería lanzar una excepción si el último carácter del DNI no es una letra
     */
    public function testDniUltimaLetraCorrecta(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('ERROR: La letra del DNI es incorrecta!');
        $dni = new DniEjemplo('00000000S');
    }
}
