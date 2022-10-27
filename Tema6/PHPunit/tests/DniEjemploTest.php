<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DniEjemploTest extends TestCase
{

    public function testDni()
    {
        $this->assertInstanceOf(
            DniEjemplo::class,
            $dni = new DniEjemplo('12345678Z')
        );
    }

    public function testDniMaxLength()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('DNI too long');
        $dni = new DniEjemplo('75895874Z1');
    }

    public function testDniMinLength()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('DNI too short');
        $dni = new DniEjemplo('75895874');
    }

}
