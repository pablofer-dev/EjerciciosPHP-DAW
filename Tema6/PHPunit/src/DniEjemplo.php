<?php

    declare(strict_types=1);


    class DniEjemplo {

        private $dni;
        private const longitud_dni = 9;
        private const letra_dni = 'TRWAGMYFPDXBNJZSQVHLCKE';

        public function __construct(string $dni)
        {
        //Controlamos Longitud
            if (strlen($dni) > self::longitud_dni) {
                throw new LengthException('Debe introducir 9 carácteres, no más');
            } elseif (strlen($dni) < self::longitud_dni) {
                throw new LengthException('Debe introducir 9 carácteres, no menos');
        //Controlamos que el DNI termine por una letra
            } elseif (preg_match('/\d$/', $dni)) {
                throw new DomainException('El DNI debe terminar por una letra');
        //Controlamos que el DNI no termine por una letra como [I, O, U, Ñ]
            } elseif (preg_match('/[UIOÑ]$/u', $dni)) {
                throw new DomainException('El DNI no debe terminar por la letra [I, O, U, Ñ]');
        //Controlamos que el DNI no contenga letra intermedias
            } elseif (!preg_match('/\d{7,7}.$/', $dni)) {
                throw new DomainException('Un DNI no puede tener letras intermedias');
        //Controlo que el DNI no contenga una letra inicial que no sea diferente de XYZ
            } elseif (! preg_match('/^[XYZ0-9]/', $dni)) {
                throw new DomainException('En caso de un NIF debe iniciar por las letras XYZ');
        //Controlo que la letra del DNI sea la correcta 
            } elseif (!($this -> validarDNI($dni))) {
                throw new InvalidArgumentException('La letra del dni introducido no es correcta');
            }   
        }
        
        
        public function validarDNI(string $dni)
        {
            $letter = substr($dni, -1);
            $numbers = substr($dni, 0, -1);

            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers%23, 1) == $letter && strlen($letter) == 1 && strlen ($numbers) == 8 ){
              return true;
            }
            return false;
        }

        public function toString() {
            return $this -> dni;
        }
    }
?>