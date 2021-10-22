<?php

    require_once 'animal.php';

    class cachorro extends animal{

        private $mamifero;

        function locomover(){
            echo "Andando...";
        }
        private function seAlimentar(){
            echo "Mamando...";
        }

    }