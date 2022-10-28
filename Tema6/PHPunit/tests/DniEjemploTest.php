<?php

use PHPUnit\Framework\TestCase;

final class DniTest extends TestCase
{

    //Controlo que el DNI tenga nueve dígitos
    public function testDniLongitudMayor()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('Debe introducir 9 carácteres, no más');
        $dni = new DniEjemplo('0123456789');
    }

    public function testDniLongitudMenor(): void
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('Debe introducir 9 carácteres, no menos');
        $dni = new DniEjemplo('01234567');
    }
    //Controlo que el DNI termine por una letra
    public function testDniAcabaConLetra(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El DNI debe terminar por una letra');
        $dni = new DniEjemplo('012345678');
    }
    //Controlo que el DNI termine por una letra que no sea [I, O, U, Ñ]
    public function testDniAcabaConLetraDiferenteIOUÑ(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('El DNI no debe terminar por la letra [I, O, U, Ñ]');
        $dni = new DniEjemplo('01234567I');
    }
    //Controlo que el DNI no contenga una letra intermedia
    public function testDniContieneLetrasEnMedio(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Un DNI no puede tener letras intermedias');
        $dni = new DniEjemplo('012AB567R');
    }
    ///Controlo que el DNI no contenga una letra inicial que no sea diferente de XYZ
    public function testDniAcabaConLetraDiferenteXYZ(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('En caso de un NIF debe iniciar por las letras XYZ');
        $dni = new DniEjemplo('A1234567R');
    }
    //Controlo que el DNI no contenga su letra correcta
    public function testDniUltimaLetraCorrecta(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('La letra del dni introducido no es correcta');
        $dni = new DniEjemplo('00000000S');
    }
}
